<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Home;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'home')]
    public function index()
    {
        $products = $this->entityManager->getRepository(Product::class)->findAll();
        $productsIsBest = $this->entityManager->getRepository(Product::class)->findByIsBest(1);
        $categories = $this->entityManager->getRepository(Category::class)->findAll();
        $var_home = $this->entityManager->getRepository(Home::class)->findAll();

        return $this->render('home/index.html.twig', [
            'products' => $products,
            'productsIsBest' => $productsIsBest,
            'categories' => $categories,
            'var_home' => $var_home,
        ]);
    }
}
