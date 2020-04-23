<?php

namespace App\Repository;

use App\Entity\Ducul;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ducul|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ducul|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ducul[]    findAll()
 * @method Ducul[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DuculRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ducul::class);
    }

    // /**
    //  * @return Ducul[] Returns an array of Ducul objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ducul
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
