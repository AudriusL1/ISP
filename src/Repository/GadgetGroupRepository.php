<?php

namespace App\Repository;

use App\Entity\GadgetGroup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method GadgetGroup|null find($id, $lockMode = null, $lockVersion = null)
 * @method GadgetGroup|null findOneBy(array $criteria, array $orderBy = null)
 * @method GadgetGroup[]    findAll()
 * @method GadgetGroup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GadgetGroupRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GadgetGroup::class);
    }

    // /**
    //  * @return GadgetGroup[] Returns an array of GadgetGroup objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GadgetGroup
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
