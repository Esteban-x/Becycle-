<?php

namespace App\Controller;

use App\Entity\Product;
use App\Services\CartService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    /**
     * @var CartService
     */
    private $cart;

    public function __construct(CartService $cart)
    {
        $this->cart = $cart;
    }

    /**
     * @Route("/cart", name="cart")
     */
    public function index()
    {
        return $this->render('cart/index.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }

    /**
     * @Route("/cart/add/{product}", name="addProduct")
     * @param Product $product
     * @return Response
     */
    public function addProduct(Product $product): Response
    {
        $this->cart->add($product);
        return $this->render('cart/index.html.twig');
    }

}
