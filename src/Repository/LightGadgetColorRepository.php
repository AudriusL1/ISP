<?php

namespace App\Repository;

use App\Entity\LightGadgetColor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method LightGadgetColor|null find($id, $lockMode = null, $lockVersion = null)
 * @method LightGadgetColor|null findOneBy(array $criteria, array $orderBy = null)
 * @method LightGadgetColor[]    findAll()
 * @method LightGadgetColor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LightGadgetColorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LightGadgetColor::class);
    }

    // /**
    //  * @return LightGadgetColor[] Returns an array of LightGadgetColor objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LightGadgetColor
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
