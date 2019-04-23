<?php

namespace App\Repository;

use App\Entity\Product;
use App\Entity\BikeSearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Product::class);
    }
    public function findAllAccessories(){
        return $this->createQueryBuilder('p')
            ->andWhere('p.type = :val')
            ->setParameter('val', "accessoire")
            ->andWhere('p.visible = 0')
            ->getQuery()
            ->getResult()
            ;
    }

    public function findAllCasques(){
        return $this->createQueryBuilder('p')
            ->andWhere('p.type = :val')
            ->setParameter('val', "casque")
            ->getQuery()
            ->getResult()
            ;
    }

    public function findAllGants(){
        return $this->createQueryBuilder('p')
            ->andWhere('p.type = :val')
            ->setParameter('val', "gant")
            ->getQuery()
            ->getResult()
            ;
    }

    public function findAllSacs(){
        return $this->createQueryBuilder('p')
            ->andWhere('p.type = :val')
            ->setParameter('val', "sac")
            ->getQuery()
            ->getResult()
            ;
    }

    public function findAllLunettes(){
        return $this->createQueryBuilder('p')
            ->andWhere('p.type = :val')
            ->setParameter('val', "lunette")
            ->getQuery()
            ->getResult()
            ;
    }
    
    public function findAllBikes(){
        return $this->createQueryBuilder('p')
            ->andWhere('p.type = :val')
            ->andWhere('p.visible = 0')
            ->setParameter('val', "bike")
            ->getQuery()
            ->getResult()
            ;
    }

    public function findBy_id($id)
    {
        $queryBuilder = $this->createQueryBuilder('p')
            ->andWhere('p.id = :id')
            ->setParameter('id', $id)
            ->getQuery();
          return $queryBuilder->execute();
    }

    public function findByCategory_id($category)
    {
        $queryBuilder = $this->createQueryBuilder('p')
            ->where('p.category = :category')
            ->setParameter('category', $category)
            ->getQuery();
          return $queryBuilder->execute();
  
    }

    public function findByACategory_id($acategory)
    {
        $queryBuilder = $this->createQueryBuilder('p')
            ->where('p.category = :val')
            ->setParameter('val', $acategory)
            ->getQuery();
          return $queryBuilder->execute();
  
    }
    /**
    * @return Product[] 
    */
    public function findByName($value)
    {
       return $this->createQueryBuilder('p')
            ->andWhere('p.name like :query')
            ->setParameter('query', "%" . $value . "%")
            ->getQuery()
            ->getResult();
    }


    public function findAllProdCatId($id)
    {
        $queryBuilder = $this->createQueryBuilder('p')
            ->andWhere('p.category = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
    }

    public function findAllProdTagId($tid){
        return $this->createQueryBuilder('p')
            ->andWhere('p.tag= :tid')
            ->setParameter('tid', $tid)
            ->getQuery()
            ->getResult()
            ;
    }

    

   
 
   
}