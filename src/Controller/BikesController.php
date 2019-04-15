<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BikeRepository;
use App\Entity\Bike;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;

class BikesController extends AbstractController
{
    /**
     * @Route("/bikes", name="bikes")
     * @return Response
     */
    public function bikes(BikeRepository $bikerepo, PaginatorInterface $paginator, Request $request) : Response
    {   
         $bikes = $bikerepo->findAll();
         
        dump($request);

        $pagination = $paginator->paginate(
           $bikes, 

        $request->query->getInt('page', 1),9
        
        );
        return $this->render('bikes/bikes.html.twig', [
            'controller_name' => 'BikesController',
            'bikes' => $bikes,
            'pagination' => $pagination
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
