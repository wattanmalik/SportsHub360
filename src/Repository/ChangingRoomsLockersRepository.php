<?php

namespace App\Repository;

use App\Entity\ChangingRoomsLockers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ChangingRoomsLockers|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChangingRoomsLockers|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChangingRoomsLockers[]    findAll()
 * @method ChangingRoomsLockers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChangingRoomsLockersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ChangingRoomsLockers::class);
    }

//    /**
//     * @return ChangingRoomsLockers[] Returns an array of ChangingRoomsLockers objects
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
    public function findOneBySomeField($value): ?ChangingRoomsLockers
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
