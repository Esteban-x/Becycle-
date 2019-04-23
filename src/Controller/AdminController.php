<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\OrdersRepository;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/orders", name="admin_orders")
     */
    public function AdminAccOrders(OrdersRepository $ordrepo)
    {
        $activeorder =  $ordrepo->showActiveOrder();
        
    

        return $this->render('admin/index.html.twig', [
               'activeorders' => $activeorder
        ]);
    }
}
