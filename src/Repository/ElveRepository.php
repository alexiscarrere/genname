<?php

namespace App\Repository;

use App\Entity\Elf;
use App\Entity\Elve;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Elve|null find($id, $lockMode = null, $lockVersion = null)
 * @method Elve|null findOneBy(array $criteria, array $orderBy = null)
 * @method Elve[]    findAll()
 * @method Elve[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ElveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Elf::class);
    }
    public function findRandom() {
        $rsm = new \Doctrine\ORM\Query\ResultSetMappingBuilder($this->getEntityManager());
        $rsm->addRootEntityFromClassMetadata(\App\Entity\Elf::class, 'elf');
        $sql = "SELECT * FROM elf ORDER BY RAND() LIMIT 1";
        return $this->getEntityManager()->createNativeQuery($sql, $rsm)->getOneOrNullResult();
    }

    // /**
    //  * @return Elve[] Returns an array of Elve objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Elve
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
