<?php

namespace App\Repository;

use App\Entity\ContactUsForm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ContactUsForm|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContactUsForm|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContactUsForm[]    findAll()
 * @method ContactUsForm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactUsFormRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ContactUsForm::class);
    }

//    /**
//     * @return ContactUsForm[] Returns an array of ContactUsForm objects
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
    public function findOneBySomeField($value): ?ContactUsForm
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
