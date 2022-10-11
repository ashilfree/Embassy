<?php

namespace App\Repository;

use App\Entity\Booking;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use Doctrine\Persistence\ManagerRegistry;
use Psr\Log\LoggerInterface;

/**
 * @method Booking|null find($id, $lockMode = null, $lockVersion = null)
 * @method Booking|null findOneBy(array $criteria, array $orderBy = null)
 * @method Booking[]    findAll()
 * @method Booking[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookingRepository extends ServiceEntityRepository
{
    private $logger;
    public function __construct(ManagerRegistry $registry, LoggerInterface $logger)
    {
        parent::__construct($registry, Booking::class);
        $this->logger = $logger;
    }

    public function getBookings()
    {
        return $this->createQueryBuilder('b')
            ->select('b','s')
            ->join('b.schedule', 's')
            ->getQuery()
            ->getResult();
    }

    public function getTodayBookings()
    {
        return $this->createQueryBuilder('b')
            ->select('b','s')
            ->join('b.schedule', 's')
            ->where('s.date = :date')
            ->setParameter('date', (new \DateTime())->format('Y-m-d'))
            ->getQuery()
            ->getResult();
    }

    public function getCountTodayBookings():int
    {
        try {
            return $this->createQueryBuilder('b')
                ->select('count(b.id)')
                ->join('b.schedule', 's')
                ->where('s.date = :date')
                ->setParameter('date', (new \DateTime('Now'))->format('Y-m-d'))
                ->getQuery()
                ->getSingleScalarResult();
        } catch (NoResultException $e) {
        } catch (NonUniqueResultException $e) {
        }
        return 0;
    }

    public function getCountLastWeekBookings():int
    {
        try {
            return $this->createQueryBuilder('b')
                ->select('count(b.id)')
                ->join('b.schedule', 's')
                ->where('s.date BETWEEN :begin AND :end')
                ->setParameter('begin', (new \DateTime())->modify('-7 day')->format('Y-m-d'))
                ->setParameter('end', (new \DateTime())->format('Y-m-d'))
                ->getQuery()
                ->getSingleScalarResult();
        } catch (NoResultException $e) {
        } catch (NonUniqueResultException $e) {
        }
        return 0;
    }
    public function getCountLastMonthBookings():int
    {
        try {
            return $this->createQueryBuilder('b')
                ->select('count(b.id)')
                ->join('b.schedule', 's')
                ->where('s.date BETWEEN :begin AND :end')
                ->setParameter('begin', (new \DateTime())->modify('-30 day')->format('Y-m-d'))
                ->setParameter('end', (new \DateTime())->format('Y-m-d'))
                ->getQuery()
                ->getSingleScalarResult();
        } catch (NoResultException $e) {
        } catch (NonUniqueResultException $e) {
        }
        return 0;
    }
    public function getCountLastSixMonthBookings():int
    {
        try {
            return $this->createQueryBuilder('b')
                ->select('count(b.id)')
                ->join('b.schedule', 's')
                ->where('s.date BETWEEN :begin AND :end')
                ->setParameter('begin', (new \DateTime())->modify('-180 day')->format('Y-m-d'))
                ->setParameter('end', (new \DateTime())->format('Y-m-d'))
                ->getQuery()
                ->getSingleScalarResult();
        } catch (NoResultException $e) {
        } catch (NonUniqueResultException $e) {
        }
        return 0;
    }

    public function getCountLastSixMonthByMonth()
    {
            return $this->createQueryBuilder('b')
                ->select('count(b.id), MONTH(s.date)')
                ->join('b.schedule', 's')
                ->where('s.date BETWEEN :begin AND :end')
                ->setParameter('begin', (new \DateTime())->modify('-180 day')->format('Y-m-d'))
                ->setParameter('end', (new \DateTime())->format('Y-m-d'))
                ->getQuery()
                ->getResult();
    }
    // /**
    //  * @return Booking[] Returns an array of Booking objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Booking
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
