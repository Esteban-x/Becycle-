<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BikesController extends AbstractController
{
    /**
     * @Route("/bikes", name="bikes")
     */
    public function index()
    {
        return $this->render('bikes/bikes.html.twig', [
            'controller_name' => 'BikesController',
        ]);
    }
}
