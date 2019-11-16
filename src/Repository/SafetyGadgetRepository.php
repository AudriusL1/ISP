<?php

namespace App\Repository;

use App\Entity\SafetyGadget;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SafetyGadget|null find($id, $lockMode = null, $lockVersion = null)
 * @method SafetyGadget|null findOneBy(array $criteria, array $orderBy = null)
 * @method SafetyGadget[]    findAll()
 * @method SafetyGadget[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SafetyGadgetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SafetyGadget::class);
    }

    // /**
    //  * @return SafetyGadget[] Returns an array of SafetyGadget objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SafetyGadget
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
