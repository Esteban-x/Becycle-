<?php

namespace App\Controller;

use App\Entity\Address;
use App\Form\AddressType;
use App\Repository\AddressRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddressController extends AbstractController
{
    /**
     * @Route("/account/address", name="address")
     */
    public function index(AddressRepository $addrepo)
    {
        $user = $this->getUser();
        $addresses = $addrepo->showActiveAddress($user->getId());
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

            return $this->redirectToRoute('cart');
        }

        return $this->render('account/address-new.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("account/address/edit/{id}", name="address_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Address $address): Response
    {   
        
        $form = $this->createForm(AddressType::class, $address);
       
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('address', [
                'id' => $address->getId(),
            ]);
        }
        
        return $this->render('address/edit.html.twig', [
            'address' => $address,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("account/address/{id}", name="address_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Address $address): Response
    {
        if ($this->isCsrfTokenValid('delete'.$address->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $address->setActive(1);
            $entityManager->flush();
        }

        return $this->redirectToRoute('address');
    }

    /**
     * @Route("account/address/active/{id}", name="address_active")
     */
    public function active(AddressRepository $addrepo, Address $address): Response
    {       
        $activeaddress  = $addrepo->isActive($this->getUser()->getId());

        $entityManager = $this->getDoctrine()->getManager();
            if($activeaddress != null)
            {
               $activeaddress->setActive(0);
            }
            
           
            $address->setActive(2);
            $entityManager->flush();


        return $this->redirectToRoute('address');
    }
}
