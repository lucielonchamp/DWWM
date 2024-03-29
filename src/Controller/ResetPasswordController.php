<?php

namespace App\Controller;

use App\Classe\Mail;
use App\Entity\User;
use DateTimeImmutable;
use App\Entity\ResetPassword;
use App\Form\ResetPasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class ResetPasswordController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/mot-de-passe-oublie', name: 'reset_password')]
    public function index(Request $request): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('home');
        }

        if($request->get('email')){
            $user = $this->entityManager->getRepository(User::class)->findOneByEmail($request->get('email'));

            if ($user) {
                // enregistremenet en base de la demande de reset_password avec user, token, createAt
                $reset_password = new ResetPassword();
                $reset_password->setUser($user);
                $reset_password->setToken(uniqid());
                $reset_password->setCreatedAt(new DateTimeImmutable());
                $this->entityManager->persist($reset_password);
                $this->entityManager->flush();

                //Envoie du mail
                $url = $this->generateUrl('update_password', [
                    'token' => $reset_password->getToken(),
                ] );

                $content = "Bonjour ".$user->getFirstName().' '.$user->getLastName().", <br/>Réinitialiser votre mot de passe, si cette demande ne vient pas de vous, changer votre mot de passe. ";
                $content .= "Merci de bien vouloir cliquer sur le lien suivant afin de <a href='".$url."'>mettre à jour votre mot de passe</a>";
                $mail = new Mail();
                $mail->send($user->getEmail(), $user->getFirstName().' '.$user->getLastName(), "Réinitialiser votre mot de passe.", $content);

                $this->addFlash('notice', "Vous allez recevoir votre lien de réinitialisation de mot de passe dans votre boite mail d'ici quelques minutes au plus tard.");
            } else {
                $this->addFlash('notice', 'Cette adresse email est inconnue.');
            } 
        }

        return $this->render('reset_password/index.html.twig');
    }
    #[Route('/modifier-mot-de-passe/{token}', name: 'update_password')]
    public function update($token, Request $request, UserPasswordHasherInterface $hasher)
    {
        $reset_password = $this->entityManager->getRepository(ResetPassword::class)->findOneByToken($token);

        if (!$reset_password) {
            return $this->redirectToRoute('reset_password');
        }

        $now = new \DateTimeImmutable();
        if ($now > $reset_password->getCreatedAt()->modify('+ 30 minutes')){
            $this->addFlash('notice', 'Votre demande de mot de passe a expiré. Merci de la renouveller.');
            return $this->redirectToRoute('reset_password');
        }

        $form = $this->createForm(ResetPasswordType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $new_pwd = $form->get('new_password')->getData();
            
            $password = $hasher->hashPassword($reset_password->getUser(), $new_pwd);
            $reset_password->getUser()->setPassword($password);
            $this->entityManager->flush();

            $this->addFlash('notice', 'Votre mot de passe a bien été mis à jour !');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('reset_password/update.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}
