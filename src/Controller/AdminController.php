<?php

namespace App\Controller;

use App\Entity\Orders;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
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
    /**
     * @Route("/admin/order/{id}", name="admin_order_show")
     * @param Orders $order
     * @return Response
     */
    public function AdminShowOrder(Orders $order)
    {
        $orderProducts = $order->getOrderProducts();


        return $this->render('admin/show.html.twig', [
            'products' => $orderProducts,
            'order' => $order
        ]);
    }
    /**
     * @Route("/admin/order/validate/{id}", name="admin_validate")
     * @param Orders $order
     * @return Response
     */
    public function AdminValidate(Orders $order)
    {
        $order->setOrderState(2);
        $this->getDoctrine()->getManager()->flush();

        return $this->redirectToRoute('admin_orders');
    }
}
