<?php

namespace App\Controller;

use App\Entity\Product;
use App\Services\CartService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

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
        $order = $this->cart->getCart();
        dump($order);
        \Stripe\Stripe::setApiKey("sk_test_K49VwG3tTAtkpFOXY8wudk4N00JWT94kDF");
        if($order != NULL){
            $listProd = [];
            foreach ($order["products"] as $prod){
                $listProd[]=[
                    'amount' => $prod->getPrice()*100,
                    'currency' => 'eur',
                    'name' => $prod->getIdProducts()->getName(),
                    'description' => $prod->getIdProducts()->getDescription(),
                    'quantity' => $prod->getQty(),
                ];
            }
            $session = \Stripe\Checkout\Session::create([
                'customer_email' => 'customer@example.com',
                'success_url' => $this->generateUrl('validate', [], UrlGeneratorInterface::ABSOLUTE_URL),
                'cancel_url' => $this->generateUrl('cart', [], UrlGeneratorInterface::ABSOLUTE_URL),
                'payment_method_types' => ['card'],
                'line_items' => $listProd

            ]);
        }
        return $this->render('cart/index.html.twig', [
            'cart' => $order,
            'session'=> $session,
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
        $this->addFlash("success", "Votre ".$product->getName()." a bien été ajouté au panier.");
        return $this->redirectToRoute('cart');
    }

    /**
     * @Route("/validate", name="validate")
     */
    public function validate()
    {

    }

}
