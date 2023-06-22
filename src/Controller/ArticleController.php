<?php

namespace App\Controller;

use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/article/{slug}', name: 'article')]
    public function show($slug): Response
    {
        $article = $this->entityManager->getRepository(Article::class)->findOneBySlug($slug);

        if (!$article){
            return $this->redirectToRoute('home');
        }

        return $this->render('article/index.html.twig', [
            'article' => $article,
        ]);
    }
}
