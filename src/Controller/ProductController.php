<?php

namespace App\Controller;

use App\Classe\Search;
use App\Entity\Product;
use App\Entity\Category;
use App\Form\SearchType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }

    #[Route('/nos-produits', name: 'products')]
    public function index(Request $request): Response
    {
        $search = new Search();
        $form = $this->createForm(SearchType::class, $search);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $products = $this->entityManager->getRepository(Product::class)->findWithSearch($search);
        } else {
            $products = $this->entityManager->getRepository(Product::class)->findAll();
        }

        return $this->render('product/index.html.twig', [
            'products' => $products,
            'form' => $form->createView()
        ]);
    }

    #[Route('/produit/{slug}', name: 'product')]
    public function show($slug): Response
    {
        $product = $this->entityManager->getRepository(Product::class)->findOneBySlug($slug);
        $products = $this->entityManager->getRepository(Product::class)->findAll();
        // $productCategoryId = $product->getCategory()->getId();
        // $products = $this->entityManager->getRepository(Product::class)->findByCategory($productCategoryId);

        // Récupérez l'ID de la catégorie du produit spécifique
        $specificProductCategoryId = $product->getCategory()->getId();

        // Récupérez tous les produits qui n'appartiennent pas à la catégorie du produit spécifique
        $othersProducts = $this->entityManager->createQueryBuilder()
            ->select('p')
            ->from(Product::class, 'p')
            ->join('p.category', 'c')
            ->where('c.id != :specificProductCategoryId')
            ->setParameter('specificProductCategoryId', $specificProductCategoryId)
            ->getQuery()
            ->getResult();

        $categories = $this->entityManager->getRepository(Category::class)->findAll();


        if(!$product){
            return $this->redirectToRoute('products');
        }

        return $this->render('product/show.html.twig', [
            // 'products' => $products,
            'product' => $product,
            'products' => $products,
            'categories' => $categories,
            'othersProducts' => $othersProducts,
        ]);
    }
}
