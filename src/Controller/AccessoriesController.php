<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;

class AccessoriesController extends AbstractController
{
    /**
     * @Route("/accessoires", name="accessories")
     */
    public function accessories(ProductRepository $accrepo,  PaginatorInterface $paginator, Request $request)
    {
        $accessories = $accrepo->findAllAccessories();

        $pagination = $paginator->paginate(
            $accessories, 
 
         $request->query->getInt('page', 1),6
         
         );

        return $this->render('accessories/accessories.html.twig', [
            'controller_name' => 'AccessoriesController',
            'accessories' => $accessories,
            'pagination' => $pagination
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
            'product' => $accessory
        ]);
    }

}
