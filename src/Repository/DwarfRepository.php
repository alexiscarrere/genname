<?php

namespace App\Repository;

use App\Entity\Dwarf;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Dwarf|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dwarf|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dwarf[]    findAll()
 * @method Dwarf[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DwarfRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dwarf::class);
    }
   

    public function findRandom() {
            $rsm = new \Doctrine\ORM\Query\ResultSetMappingBuilder($this->getEntityManager());
            $rsm->addRootEntityFromClassMetadata(\App\Entity\Dwarf::class, 'dwarf');
            $sql = "SELECT * FROM dwarf ORDER BY RAND() LIMIT 1";
            return $this->getEntityManager()->createNativeQuery($sql, $rsm)->getOneOrNullResult();
        }
    
    

    // /**
    //  * @return Dwarf[] Returns an array of Dwarf objects
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
    public function findOneBySomeField($value): ?Dwarf
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
