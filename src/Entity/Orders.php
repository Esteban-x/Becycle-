<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrdersRepository")
 */
class Orders
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    private $id_user;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $sess_user;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_address;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $total;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $order_date;

    /**
     * @ORM\Column(type="integer")
     */
    private $order_state;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $payment_mode;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $payment_date;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $payment_state;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getSessUser(): ?string
    {
        return $this->sess_user;
    }

    public function setSessUser(?string $sess_user): self
    {
        $this->sess_user = $sess_user;

        return $this;
    }

    public function getIdAddress(): ?int
    {
        return $this->id_address;
    }

    public function setIdAddress(?int $id_address): self
    {
        $this->id_address = $id_address;

        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(?int $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getOrderDate(): ?\DateTimeInterface
    {
        return $this->order_date;
    }

    public function setOrderDate(?\DateTimeInterface $order_date): self
    {
        $this->order_date = $order_date;

        return $this;
    }

    public function getOrderState(): ?int
    {
        return $this->order_state;
    }

    public function setOrderState(int $order_state): self
    {
        $this->order_state = $order_state;

        return $this;
    }

    public function getPaymentMode(): ?string
    {
        return $this->payment_mode;
    }

    public function setPaymentMode(?string $payment_mode): self
    {
        $this->payment_mode = $payment_mode;

        return $this;
    }

    public function getPaymentDate(): ?\DateTimeInterface
    {
        return $this->payment_date;
    }

    public function setPaymentDate(?\DateTimeInterface $payment_date): self
    {
        $this->payment_date = $payment_date;

        return $this;
    }

    public function getPaymentState(): ?string
    {
        return $this->payment_state;
    }

    public function setPaymentState(?string $payment_state): self
    {
        $this->payment_state = $payment_state;

        return $this;
    }
}
