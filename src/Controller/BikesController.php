<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BikeRepository;
use App\Entity\Bike;

class BikesController extends AbstractController
{
    /**
     * @Route("/bikes", name="bikes")
     */
    public function bikes(BikeRepository $bikerepo)
    {   
        $bikes = $bikerepo->findAll();

        
        return $this->render('bikes/bikes.html.twig', [
            'controller_name' => 'BikesController',
            'bikes' => $bikes
        ]);
    }

    /**
     * @Route("/bike/{id}", name="bike")
     * 
     * @param Bike $bike
     * @return Response
     */
    public function showProduct(Bike $bike)
    {   
        return $this->render('/bikes/show.html.twig', [
            'bike' => $bike
        ]);
    }


}
