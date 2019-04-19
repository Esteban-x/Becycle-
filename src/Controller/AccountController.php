<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

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
     * @Route("/account/orders/{order}", name="account_orders_show")
     */
    public function AccOrdersShow()
    {
        $user = $this->getUser();
        $orders = $user->getOrders();
        return $this->render('account/orders-show.html.twig', [
            'orders' => $orders,
        ]);
    }

    /**
     * @route("/account/adresse/new", name="adresse_new")
     */
    public function addAddress(Request $request, Address $address){

        $form = $this->createForm(AddressType::class, $address);

        $form->handleRequest($request);

        dump($request);
        if($form->isSubmitted() && $form->isValid())
        {
            dump($form->getData());

            $this->addFlash("success", "Envoie bien prise en compte.");


        }

        return $this->render('account/address.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
