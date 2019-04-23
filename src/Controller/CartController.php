<?php

namespace App\Controller;

use App\Entity\Product;
use App\Services\CartService;
use App\Repository\OrdersRepository;
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
        $session = null;
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
            dump($order);
            $session = \Stripe\Checkout\Session::create([
                'customer_email' => $this->getUser()->getUsername(),
                'success_url' => $this->generateUrl('validate', [], UrlGeneratorInterface::ABSOLUTE_URL),
                'cancel_url' => $this->generateUrl('cart', [], UrlGeneratorInterface::ABSOLUTE_URL),
                'payment_method_types' => ['card'],
                'line_items' => $listProd,
                'client_reference_id' => $order["order"]->getId()

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
    public function validate(OrdersRepository $orderRepo)
    {
        \Stripe\Stripe::setApiKey("sk_test_K49VwG3tTAtkpFOXY8wudk4N00JWT94kDF");

        $events = \Stripe\Event::all(["limit" => 10, "type" => "checkout.session.completed"]);

        $order = $orderRepo->findById($this->getUser()->getId());
        foreach($events as $ev){
            if($ev->data->object->client_reference_id == $order->getId()){
                $order->setOrderState(1);
                $order->setOrderPayment();
                $order->setPaymentMode($ev->data->object->payment_method_types[0]);
                $order->setPaymentState('ok');
                $order->setPaymentDate(new \DateTime('now'));
                $order->setOrderDate(new \DateTime('now'));
                $order->setIdAddress();
            }
            else{
                return $this->redirectToRoute('home');
            }
         }

        return $this->render('payment/index.html.twig');
    }
}
