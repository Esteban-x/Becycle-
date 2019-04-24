<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AccessoriesController extends AbstractController
{
    /**
     * @Route("/accessoires/{id?}", name="accessories")
     * @return Response
     * @param $id
     */
    public function accessories(ProductRepository $accrepo,CategoryRepository $catrepo, PaginatorInterface $paginator, Request $request, $id = false) : Response
    {   
        
        $accessories = $accrepo->findAllAccessories();
      
        
        $acategory = $catrepo->findAcategory();

        if($id)
        {   $accessories = $accrepo->findByACategory_id($id);

            $acategoryname = array_values(array_filter($acategory, function($acategory)use ($id){
                return $acategory->getId() == $id;
            }));
        }
        else
        {
            $casques = $accrepo->findAllCasques();
            $acategoryname = 'Catégories';
        }

        $pagination = $paginator->paginate(
            $accessories,
 
         $request->query->getInt('page', 1),9
         
         );

        return $this->render('accessories/accessories.html.twig', [
            'controller_name' => 'AccessoriesController',
            'accessories' => $accessories,
            'pagination' => $pagination,
            'acategorys' => $acategory
        ]);
    }

    /**
     * @Route("/accessory/{id}", name="accessory", methods={"GET"})
     * 
     * @param Product $accessory
     * @return Response
     */
    public function showAccess(Product $accessory, Request $request, $id) 

    {   $em = $this->getDoctrine()->getmanager();
        $accessory = null;

        if ($id) {
            $accessory = $em->getRepository(Product::class)->findOneBy(['id' => $id]);
        }
        return $this->render('/accessories/show.html.twig', [
            'product' => $accessory
        ]);
    }

}
