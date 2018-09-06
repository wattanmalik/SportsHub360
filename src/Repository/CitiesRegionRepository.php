<?php

namespace App\Repository;

use App\Entity\CitiesRegion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CitiesRegion|null find($id, $lockMode = null, $lockVersion = null)
 * @method CitiesRegion|null findOneBy(array $criteria, array $orderBy = null)
 * @method CitiesRegion[]    findAll()
 * @method CitiesRegion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CitiesRegionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CitiesRegion::class);
    }

//    /**
//     * @return CitiesRegion[] Returns an array of CitiesRegion objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CitiesRegion
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
