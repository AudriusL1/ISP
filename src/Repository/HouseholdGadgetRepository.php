<?php

namespace App\Repository;

use App\Entity\HouseholdGadget;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method HouseholdGadget|null find($id, $lockMode = null, $lockVersion = null)
 * @method HouseholdGadget|null findOneBy(array $criteria, array $orderBy = null)
 * @method HouseholdGadget[]    findAll()
 * @method HouseholdGadget[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HouseholdGadgetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HouseholdGadget::class);
    }

    // /**
    //  * @return HouseholdGadget[] Returns an array of HouseholdGadget objects
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
    public function findOneBySomeField($value): ?HouseholdGadget
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
