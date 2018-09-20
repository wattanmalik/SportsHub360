<?php

namespace App\Repository;

use App\Entity\WashRoom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method WashRoom|null find($id, $lockMode = null, $lockVersion = null)
 * @method WashRoom|null findOneBy(array $criteria, array $orderBy = null)
 * @method WashRoom[]    findAll()
 * @method WashRoom[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WashRoomRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, WashRoom::class);
    }

//    /**
//     * @return WashRoom[] Returns an array of WashRoom objects
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
    public function findOneBySomeField($value): ?WashRoom
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
