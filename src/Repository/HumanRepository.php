<?php

namespace App\Repository;

use App\Entity\Human;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Human|null find($id, $lockMode = null, $lockVersion = null)
 * @method Human|null findOneBy(array $criteria, array $orderBy = null)
 * @method Human[]    findAll()
 * @method Human[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HumanRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Human::class);
    }

    public function findRandom() {
        $rsm = new \Doctrine\ORM\Query\ResultSetMappingBuilder($this->getEntityManager());
        $rsm->addRootEntityFromClassMetadata(\App\Entity\Human::class, 'human');
        $sql = "SELECT * FROM human ORDER BY RAND() LIMIT 1";
        return $this->getEntityManager()->createNativeQuery($sql, $rsm)->getOneOrNullResult();
    }

    // /**
    //  * @return Human[] Returns an array of Human objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Human
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
