<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccessoriesController extends AbstractController
{
    /**
     * @Route("/accessoires", name="accessories")
     */
    public function accessories(ProductRepository $accrepo)
    {
        $accessories = $accrepo->findAllAccessories();

        return $this->render('accessories/accessories.html.twig', [
            'controller_name' => 'AccessoriesController',
            'accessories' => $accessories
        ]);
    }

    /**
     * @Route("/accessory/{id}", name="accessory")
     * 
     * @param Product $accessory
     * @return Response
     */
    public function showAccess(Product $accessory)
    {   
        return $this->render('/accessories/show.html.twig', [
            'accessory' => $accessory
        ]);
    }

}
