<?php

namespace App\Repository;

use App\Entity\WriteAReview;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method WriteAReview|null find($id, $lockMode = null, $lockVersion = null)
 * @method WriteAReview|null findOneBy(array $criteria, array $orderBy = null)
 * @method WriteAReview[]    findAll()
 * @method WriteAReview[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WriteAReviewRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, WriteAReview::class);
    }

//    /**
//     * @return WriteAReview[] Returns an array of WriteAReview objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WriteAReview
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
