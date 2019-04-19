<?php

namespace App\Controller;

use App\Entity\Address;
use App\Form\AddressType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AddressController extends AbstractController
{
    /**
     * @Route("/account/address", name="address")
     */
    public function index()
    {
        $user = $this->getUser();
        $addresses = $user->getAddresses();
        return $this->render('address/index.html.twig', [
            'addresses' => $addresses,
        ]);
    }

    /**
     * @Route("/account/address/new", name="new_address")
     */
    public function addAddress(Request $request){

        $address = new Address();
        $form = $this->createForm(AddressType::class, $address);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $user = $this->getUser();
            $address->setIdUser($user);
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($address);
            $manager->flush();
            $this->addFlash("success", "Adresse bien enregistré.");

            return $this->redirectToRoute('account');
        }

        return $this->render('account/address-new.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
