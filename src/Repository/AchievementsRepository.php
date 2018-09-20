<?php

namespace App\Repository;

use App\Entity\Achievements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Achievements|null find($id, $lockMode = null, $lockVersion = null)
 * @method Achievements|null findOneBy(array $criteria, array $orderBy = null)
 * @method Achievements[]    findAll()
 * @method Achievements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AchievementsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Achievements::class);
    }

//    /**
//     * @return Achievements[] Returns an array of Achievements objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Achievements
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
