<?php

namespace App\Repository;

use App\Entity\Dwarfs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Dwarfs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dwarfs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dwarfs[]    findAll()
 * @method Dwarfs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DwarfsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dwarfs::class);
    }

    // /**
    //  * @return Dwarfs[] Returns an array of Dwarfs objects
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
    public function findOneBySomeField($value): ?Dwarfs
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
