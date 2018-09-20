<?php

namespace App\Repository;

use App\Entity\FeeStructures;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FeeStructures|null find($id, $lockMode = null, $lockVersion = null)
 * @method FeeStructures|null findOneBy(array $criteria, array $orderBy = null)
 * @method FeeStructures[]    findAll()
 * @method FeeStructures[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FeeStructuresRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FeeStructures::class);
    }

//    /**
//     * @return FeeStructures[] Returns an array of FeeStructures objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FeeStructures
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
