<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription()
    {
        return $this->render('form/inscription.html.twig', [
            'controller_name' => 'FormController',
        ]);
    }

    /**
     * @Route("/connexion", name="login")
     */
    public function login()
    {
        return $this->render('form/connexion.html.twig', [
            'controller_name' => 'FormController',
        ]);
    }



}
