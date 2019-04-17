<?php


namespace App\Services;

use App\Entity\OrderProducts;
use App\Entity\Orders;
use App\Entity\Product;
use App\Entity\User;
use Symfony\Component\Security\Core\Security;
use App\Repository\OrdersRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CartService
{
    /**
     * @var SessionInterface
     */
    private $session;
    /**
     * @var OrdersRepository
     */
    private $ordRepo;
    /**
     * @var ObjectManager
     */
    private $om;

    private $security;

    public function __construct(
        SessionInterface $session,
        OrdersRepository $ordRepo,
        ObjectManager $manager,
        Security $security)
    {
        if($session->getId()== ""){
            $session->start();
        }
        $this->session = $session;
        $this->ordRepo = $ordRepo;
        $this->om = $manager;
        $this->security = $security;
    }

    /**
     * @param Product $product
     * @param OrdersRepository $ordRepo
     * @return \App\Entity\OrderProducts[]|\Doctrine\Common\Collections\Collection
     */
    public function add(Product $product): self
    {
        $newprod = true;
        $user = $this->security->getUser();
        if($user != NULL){
            $order = $this->ordRepo->findByID($user->getId());
        }else{
            $order = $this->ordRepo->findBySession($this->session->getId());
        }

        if($order == NULL ){
            $order = new Orders();
            if($user != NULL){
                $order->setIdUser($user);
            }else{
                $order->setSessUser($this->session->getId());
            }
            $order->setOrderState(0);
            $this->om->persist($order);
            $this->om->flush();
            $this->session->set("id_cart", $order->getId());
        }
        $products = $order->getOrderProducts();
        foreach ($products as $p){
            if($p->getIdProducts()===$product){
                $p->setQty($p->getQty()+1);
                $p->setTotal($p->getPrice()*$p->getQty());
                $newprod = false;
                dump($p);
            }
        }
        if($newprod){
            $ordProd = new OrderProducts();
            $ordProd->setPrice($product->getPrice());
            $ordProd->setQty(1);
            $ordProd->setTotal($ordProd->getPrice()*$ordProd->getQty());
            $ordProd->setIdOrder($order);
            $ordProd->setIdProducts($product);
            $order->addOrderProduct($ordProd);
            $this->om->persist($ordProd);
        }
        $this->om->flush();

        /*$products[] = $product ;
        $this->session->set('products', $products);*/
        return $this;
    }
    public function checkLogin(){
        $user = $this->security->getUser();
        dump($user);
        if($user != NULL) {
            $order = $this->ordRepo->findBySession($this->session->getId());
            dump($order);
            dump($this->session->getId());
            if($order != NULL){
                $order->setIdUser($user);
                $this->om->flush();
            }
        }
    }
}