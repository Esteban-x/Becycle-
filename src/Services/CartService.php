<?php


namespace App\Services;

use App\Entity\OrderProducts;
use App\Entity\Orders;
use App\Entity\Product;
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
        $order = $this->getOrder($user);

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
        $this->amountTotal();

        return $this;
    }
    public function checkLogin($sessId){
        $user = $this->security->getUser();
        if($user != NULL) {
            $order = $this->ordRepo->findBySession($sessId);
            if($order != NULL){
                $order->setIdUser($user);
                $order->setSessUser($sessId);
                $this->om->flush();
            }
        }
    }
    public function amountTotal(){
        $user = $this->security->getUser();
        $order = $this->getOrder($user);
        $total = 0;
        $haveBike = 0;
        if($order != NULL){
            $products = $order->getOrderProducts();
            foreach($products as $p){
                $total += $p->getTotal();
                if($p->getIdProducts()->getType() == "bike"){
                    $haveBike += $p->getQty();
                }
            }
            if($haveBike >0){
                $haveBike = $haveBike*30;
                $total += $haveBike;
            }else{
                $haveBike = 5;
                $total += $haveBike;
            }
            $order->setTotal($total);
            $this->om->flush();
        }
        return $haveBike;
    }
    public function getOrder($user){
        if($user != NULL){
            $order = $this->ordRepo->findByID($user->getId());
        }else{
            $order = $this->ordRepo->findBySession($this->session->getId());
        }
        return $order;
    }
    public function getCart(){
        $user = $this->security->getUser();
        $order = $this->getOrder($user);
        if($order != NULL ) {
            $products = $order->getOrderProducts();
            return array("order"=> $order, "products"=>$products);
        }else{
            return NULL;
        }
    }
    public function remove(OrderProducts $product)
    {
        $cart = $this->getCart();
        if(sizeof($cart['products']) > 1){
            $this->amountTotal();
            $this->om->remove($product);
            $this->om->flush();
            return $this;
        }else{
            $this->deleteCart();
        }
    }
    public function deleteCart(){
        $cart = $this->getCart();
        if($cart["products"] != null){
            foreach ($cart["products"] as $produ){
                $this->om->remove($produ);
            }
        $this->om->remove($cart["order"]);
        $this->om->flush();
        }
        return $this;
    }
    public function editCart(OrderProducts $product, $edit){
        $cart = $this->getCart();
        $qty = $product->getQty();
        $price = $product->getPrice();
        switch($edit){
            case "more":
                $product->setQty($qty+1);
                $product->setTotal(($qty+1)*$price);
                break;
            case "less":
                if($product->getQty()>1){
                    $product->setQty($qty-1);
                    $product->setTotal(($qty-1)*$price);
                }else{
                    $this->remove($product);
                }
                break;
        }
        $this->amountTotal();
        $this->om->flush();
        return $this;
    }
    
}