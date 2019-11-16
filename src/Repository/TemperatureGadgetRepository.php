<?php

namespace App\Repository;

use App\Entity\TemperatureGadget;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TemperatureGadget|null find($id, $lockMode = null, $lockVersion = null)
 * @method TemperatureGadget|null findOneBy(array $criteria, array $orderBy = null)
 * @method TemperatureGadget[]    findAll()
 * @method TemperatureGadget[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TemperatureGadgetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TemperatureGadget::class);
    }

    // /**
    //  * @return TemperatureGadget[] Returns an array of TemperatureGadget objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TemperatureGadget
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
