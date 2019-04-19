<?php

namespace App\Repository;

use App\Entity\Orders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Orders|null find($id, $lockMode = null, $lockVersion = null)
 * @method Orders|null findOneBy(array $criteria, array $orderBy = null)
 * @method Orders[]    findAll()
 * @method Orders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Orders::class);
    }
    public function findBySession($session){
        return $this->createQueryBuilder('o')
            ->andWhere('o.sess_user = :val')
            ->setParameter('val', $session)
            ->andWhere('o.order_state = 0')
            ->getQuery()
            ->getOneOrNullResult();
    }
    public function findById($id){
        return $this->createQueryBuilder('o')
            ->andWhere('o.id_user = :val')
            ->setParameter('val', $id)
            ->andWhere('o.order_state = 0')
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findAllById($id){
        return $this->createQueryBuilder('o')
            ->andWhere('o.id_user = :val')
            ->setParameter('val', $id)
            ->getQuery()
            ->getResult();
    }
    // /**
    //  * @return Orders[] Returns an array of Orders objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Orders
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
