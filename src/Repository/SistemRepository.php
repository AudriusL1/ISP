<?php

namespace App\Repository;

use App\Entity\Sistem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Sistem|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sistem|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sistem[]    findAll()
 * @method Sistem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SistemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sistem::class);
    }

    // /**
    //  * @return Sistem[] Returns an array of Sistem objects
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
    public function findOneBySomeField($value): ?Sistem
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
