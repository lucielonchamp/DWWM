<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class CartController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/panier', name: 'cart')]
    public function index(Cart $cart): Response
    {
        return $this->render('cart/index.html.twig', [
            'cart' => $cart->getFull(),
        ]);
    }

    #[Route('/cart/add/{id}', name: 'add_to_cart')]
    public function add(Cart $cart, $id, Request $request): Response
    {
        $cart->add($id);
        if ($cart->add($id) === false) {
            $this->addFlash('danger', 'Il n\'y a pas assez de produits en stock');
        } else {
            $this->addFlash('success', 'L\'article a bien été ajouté au panier');
        }
        if ($request->headers->get('referer') === $this->getParameter('domain') . '/cart/') {
            return $this->redirectToRoute('cart');
            die();
        }
        return $this->redirectToRoute('products');
    }
    // Si dans le produit redirection différente

    #[Route('/cart/delete/{id}', name: 'delete_to_cart')]
    public function delete(Cart $cart, $id): Response
    {
        $cart->delete($id);

        return $this->redirectToRoute('cart');
    }

    #[Route('/cart/decrease/{id}', name: 'decrease_to_cart')]
    public function decrease(Cart $cart, $id): Response
    {
        $cart->decrease($id);

        return $this->redirectToRoute('cart');
    }
}
