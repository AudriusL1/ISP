<?php

namespace App\Repository;

use App\Entity\ElectronicGadget;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ElectronicGadget|null find($id, $lockMode = null, $lockVersion = null)
 * @method ElectronicGadget|null findOneBy(array $criteria, array $orderBy = null)
 * @method ElectronicGadget[]    findAll()
 * @method ElectronicGadget[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ElectronicGadgetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ElectronicGadget::class);
    }

    // /**
    //  * @return ElectronicGadget[] Returns an array of ElectronicGadget objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ElectronicGadget
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
