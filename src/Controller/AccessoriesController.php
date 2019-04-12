<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AccessoryRepository;
use App\Entity\Accessory;

class AccessoriesController extends AbstractController
{
    /**
     * @Route("/accessoires", name="accessories")
     */
    public function accessories(AccessoryRepository $accrepo)
    {
        $accessories = $accrepo->findAll();

        return $this->render('accessories/accessories.html.twig', [
            'controller_name' => 'AccessoriesController',
            'accessories' => $accessories
        ]);
    }

    /**
     * @Route("/accessory/{id}", name="accessory")
     * 
     * @param Accessory $accessory
     * @return Response
     */
    public function showAccess(Accessory $accessory)
    {   
        return $this->render('/accessories/show.html.twig', [
            'accessory' => $accessory
        ]);
    }

}
