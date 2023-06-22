<?php

namespace App\Controller;

use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }

    #[Route('/categories', name: 'categories')]
    public function index(): Response
    {
        return $this->render('category/index.html.twig');
    }

    #[Route('/categorie/{slug}', name: 'category')]
    public function show($slug): Response
    {
        $category = $this->entityManager->getRepository(Category::class)->findOneBySlug($slug);

        if(!$category){
            return $this->redirectToRoute('categories');
        }

        return $this->render('category/show.html.twig', [
            'category' => $category,
        ]);
    }
}
