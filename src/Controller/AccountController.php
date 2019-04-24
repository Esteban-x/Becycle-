<?php

namespace App\Controller;

use App\Entity\Orders;
use App\Form\SignUpType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AccountController extends AbstractController
{
    /**
     * @Route("/account", name="account")
     */
    public function index()
    {
        return $this->render('account/index.html.twig', [
            'controller_name' => 'AccountController',
        ]);
    }
    /**
     * @Route("/account/orders", name="account_orders")
     */
    public function AccOrders()
    {
        $user = $this->getUser();
        $orders = $user->getOrders();
        return $this->render('account/orders.html.twig', [
            'orders' => $orders,
        ]);
    }

    /**
     * @Route("/account/orders/{order?}", name="account_orders_show")
     * @param Orders $order
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function AccOrdersShow(Orders $order)
    {
        $orderProducts = $order->getOrderProducts();
        $products = [];
        foreach($orderProducts  as $liaison){
            $products[] = $liaison->getIdProducts();
        }
        return $this->render('account/orders-show.html.twig', [
            'products' => $products,
            'order' => $order
        ]);
    }


    /**
     * @route("/account/parametres", name="parametres")
     *
     */

    public function ParametresShow(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = $this->getUser();
        $form = $this->createForm(SignUpType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);
            $manager = $this->getDoctrine()->getManager();
            $manager->flush();

            $this->addFlash("success", "Modification bien prise en compte.");

            return $this->redirectToRoute('home');
        }
        return $this->render('account/parametres-show.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @route("/account/parametres", name="parametres-show.html.twig")
     */
}



