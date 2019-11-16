<?php

namespace App\Repository;

use App\Entity\HouseholdGadgetTimer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method HouseholdGadgetTimer|null find($id, $lockMode = null, $lockVersion = null)
 * @method HouseholdGadgetTimer|null findOneBy(array $criteria, array $orderBy = null)
 * @method HouseholdGadgetTimer[]    findAll()
 * @method HouseholdGadgetTimer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HouseholdGadgetTimerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HouseholdGadgetTimer::class);
    }

    // /**
    //  * @return HouseholdGadgetTimer[] Returns an array of HouseholdGadgetTimer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HouseholdGadgetTimer
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
