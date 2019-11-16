<?php

namespace App\Repository;

use App\Entity\LightGadget;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method LightGadget|null find($id, $lockMode = null, $lockVersion = null)
 * @method LightGadget|null findOneBy(array $criteria, array $orderBy = null)
 * @method LightGadget[]    findAll()
 * @method LightGadget[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LightGadgetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LightGadget::class);
    }

    // /**
    //  * @return LightGadget[] Returns an array of LightGadget objects
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
    public function findOneBySomeField($value): ?LightGadget
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
