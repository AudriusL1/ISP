<?php

namespace App\Repository;

use App\Entity\TemperatureTimer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TemperatureTimer|null find($id, $lockMode = null, $lockVersion = null)
 * @method TemperatureTimer|null findOneBy(array $criteria, array $orderBy = null)
 * @method TemperatureTimer[]    findAll()
 * @method TemperatureTimer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TemperatureTimerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TemperatureTimer::class);
    }

    // /**
    //  * @return TemperatureTimer[] Returns an array of TemperatureTimer objects
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
    public function findOneBySomeField($value): ?TemperatureTimer
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
