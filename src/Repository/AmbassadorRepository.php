<?php

namespace App\Repository;

use App\Entity\Ambassador;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ambassador|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ambassador|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ambassador[]    findAll()
 * @method Ambassador[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AmbassadorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ambassador::class);
    }

    // /**
    //  * @return Page[] Returns an array of Page objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Page
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
