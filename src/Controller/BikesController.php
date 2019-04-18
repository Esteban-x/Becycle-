<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use App\Repository\TagRepository;
use App\Entity\Product;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\BikeSearch;
use App\Form\BikeSearchType;

class BikesController extends AbstractController
{
    /**
     * @Route("/bikes/{id?}", name="bikes")
     * @return Response
     * @param $id
     */
    public function bikes(ProductRepository $prodrepo, CategoryRepository $catrepo, TagRepository $tagrepo, PaginatorInterface $paginator, Request $request, $id = false) : Response
    {   
        $tag = $tagrepo->findAll();
        $category = $catrepo->findAll();
        
        if ($id)
        {
            $bikes = $prodrepo->findByCategory_id($id);
            $categoryname =  array_values(array_filter($category, function($category)use ($id){
                return $category->getId() == $id;
            }));
            
            $categoryname = $categoryname[0]->getName();
            
        }
        else
        {
            $bikes = $prodrepo->findAllBikes();
            $categoryname = 'Catégories';
        }
       
        $pagination = $paginator->paginate(
           $bikes, 

        $request->query->getInt('page', 1),9
        
        );
        
        
        return $this->render('bikes/bikes.html.twig', [
            'controller_name' => 'BikesController',
            'bikes' => $bikes,
            'pagination' => $pagination,
            'categorys' => $category,
            'tags' => $tag,
            'currentcategory' => $categoryname   
            
            
        ]);
    }

    /**
     * @Route("/bike/show/{id?}", name="bike", methods={"GET"})
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

    /**
     * @Route("/recherche/{_query?}", name="search")
     */
    public function handleSearchRequest(Request $request, $_query)
    {
        $em = $this->getDoctrine()->getManager();
        
        if($_query)
        {   
            $data = $em->getRepository(Product::class)->findByName($_query);
            
        }
        else {
            $data = $em->getRepository(Product::class)->findAll();
        } 

        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        $normalizers = [
            $normalizer 
        ];

        $encoders = [
            new JsonEncoder()
        ];

        $serializers = new Serializer($normalizers, $encoders);

        $data = $serializers->serialize($data, 'json');

        return new JsonResponse($data, 200, [], true);        
    }

    
}
