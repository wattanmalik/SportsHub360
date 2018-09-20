<?php

namespace App\Repository;

use App\Entity\ShowerRoom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ShowerRoom|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShowerRoom|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShowerRoom[]    findAll()
 * @method ShowerRoom[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShowerRoomRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ShowerRoom::class);
    }

//    /**
//     * @return ShowerRoom[] Returns an array of ShowerRoom objects
//     */
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
    public function findOneBySomeField($value): ?ShowerRoom
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
