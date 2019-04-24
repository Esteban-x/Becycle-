<?php

namespace App\Controller;

use App\Entity\OrderProducts;
use App\Entity\Product;
use App\Services\CartService;
use App\Repository\OrdersRepository;
use App\Repository\AddressRepository;
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
        $user = $this->getUser();
        $ValAddress = false;
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
            if($user != null){
                foreach($user->getAddresses() as $add){
                    if($add->getActive()== 2){
                        $ValAddress = true;
                        break;
                    }
                }
                $session = \Stripe\Checkout\Session::create([
                    'customer_email' => $user->getUsername(),
                    'success_url' => $this->generateUrl('validate', [], UrlGeneratorInterface::ABSOLUTE_URL),
                    'cancel_url' => $this->generateUrl('cart', [], UrlGeneratorInterface::ABSOLUTE_URL),
                    'payment_method_types' => ['card'],
                    'line_items' => $listProd,
                    'client_reference_id' => $order["order"]->getId()

                ]);
            }
        }
        return $this->render('cart/index.html.twig', [
            'cart' => $order,
            'session'=> $session,
            'valadd'=> $ValAddress,
            'frais'=> $this->cart->amountTotal()
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
    public function validate(OrdersRepository $orderRepo, AddressRepository $addRepo)
    {
        \Stripe\Stripe::setApiKey("sk_test_K49VwG3tTAtkpFOXY8wudk4N00JWT94kDF");

        $events = \Stripe\Event::all(["limit" => 10, "type" => "checkout.session.completed"]);
        $user = $this->getUser();
        if($user != null){
            $user = $user->getId();
        $order = $orderRepo->findById($user);
        $addr = $addRepo->isActive($user);
        foreach($events as $ev){
            if($ev->data->object->client_reference_id == $order->getId()){
                $manager = $this->getDoctrine()->getManager();

                $order->setOrderState(1);
                $order->setPaymentMode($ev->data->object->payment_method_types[0]);
                $order->setPaymentState('ok');
                $order->setPaymentDate(new \DateTime('now'));
                $order->setOrderDate(new \DateTime('now'));
                $order->setIdAdress($addr);

                $manager->flush();
            }
            else{
                return $this->redirectToRoute('home');
            }
         }

        return $this->render('payment/index.html.twig');
        }
        else{
            return $this->redirectToRoute('home');
        }
    }
    /**
     * @Route("/cart/remove/{id}", name="cart_remove")
     * @param OrderProducts $product
     * @return Response
     */
    public function remove(OrderProducts $product)
    {
        $this->cart->remove($product);

        return $this->redirectToRoute('cart');
    }
    /**
     * @Route("/cart/delete", name="cart_clear")
     */
    public function delete()
    {
        $this->cart->deleteCart();

        return $this->redirectToRoute('cart');
    }

    /**
     * @Route("/cart/edit/{id}/{edit}", name="cart_edit")
     * @param OrderProducts $product
     * @param string $edit
     * @return Response
     */
    public function edit(OrderProducts $product, $edit)
    {
        $this->cart->editCart($product, $edit);

        return $this->redirectToRoute('cart');
    }
}
