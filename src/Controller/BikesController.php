<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BikeRepository;
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
    public function bikes(ProductRepository $bikerepo, PaginatorInterface $paginator, Request $request) : Response
    {   
         $bikes = $bikerepo->findAllBikes();


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
     * @Route("/bike/{id?}", name="bike", methods={"GET"})
     * 
     */
    public function showProduct(Request $request, $id)
    {   
        $em = $this->getDoctrine()->getmanager();
        $bike = null;

        if ($id) {
            $bike = $em->getRepository(Product::class)->findOneBy(['id' => $id]);
        }

        return $this->render('/bikes/show.html.twig', [
            'bike' => $bike
        ]);
    }

    // /**
    //  * @Route("bikes/recherche", name="search")
    //  */
    // public function searchAction(BikeRepository $bikerepo, PaginatorInterface $paginator, Request $request) : Response
    // {   
    //     $em = $this->getDoctrine()->getManager();

    //     $motcle = $request->get('motcle');

    //      $bikes = $bikerepo->findBy(
    //          ['Name' => $motcle],
    //          ['Price' => 'ASC']
    //         );
            
    //     dump($request);

    //     $pagination = $paginator->paginate(
    //        $bikes, 

    //     $request->query->getInt('page', 1),9
        
    //     );
    //     return $this->render('bikes/bikes.html.twig', [
    //         'controller_name' => 'BikesController',
    //         'bikes' => $bikes,
    //         'pagination' => $pagination
    //     ]);
    // }

    /**
     * @Route("bikes/recherche/{_query?}", name="search")
     */
    public function handleSearchRequest(Request $request, $_query)
    {
        $em = $this->getDoctrine()->getManager();
        
        if($_query)
        {   $motcle = $request->get('motcle');
            $data = $em->getRepository(Bike::class)->findByName($_query);
        }
        else {
            $data = $em->getRepository(Bike::class)->findAll();
        }

        

        $normalizers = [
            new ObjectNormalizer()
        ];

        $encoders = [
            new JsonEncoder()
        ];

        $serializers = new Serializer($normalizers, $encoders);

        $data = $serializers->serialize($data, 'json');

        return new JsonResponse($data, 200, [], true);        
    }


}
