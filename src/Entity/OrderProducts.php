<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrderProductsRepository")
 */
class OrderProducts
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;



    /**
     * @ORM\Column(type="integer")
     */
    private $qty;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="integer")
     */
    private $total;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Product", inversedBy="orderProducts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_products;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Orders", inversedBy="orderProducts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_order;


    public function getId(): ?int
    {
        return $this->id;
    }



    public function getQty(): ?int
    {
        return $this->qty;
    }

    public function setQty(int $qty): self
    {
        $this->qty = $qty;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getIdProducts(): ?Product
    {
        return $this->id_products;
    }

    public function setIdProducts(?Product $id_products): self
    {
        $this->id_products = $id_products;

        return $this;
    }

    public function getIdOrder(): ?Orders
    {
        return $this->id_order;
    }

    public function setIdOrder(?Orders $id_order): self
    {
        $this->id_order = $id_order;

        return $this;
    }
}
