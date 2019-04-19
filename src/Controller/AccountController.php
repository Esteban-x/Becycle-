<?php

namespace App\Controller;

use App\Entity\Address;
use App\Form\AddressType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
     * @route("/adresse/new", name="adresse_new")
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
