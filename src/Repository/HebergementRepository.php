<?php

namespace App\Repository;

use App\Entity\Hebergement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Model\SearchData;

/**
 * @extends ServiceEntityRepository<Hebergement>
 *
 * @method Hebergement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hebergement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hebergement[]    findAll()
 * @method Hebergement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HebergementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hebergement::class);
    }
    
    public function findSearch(SearchData $searchData): array
{
    return $this->createQueryBuilder('h')
    ->select('h')
    ->andWhere('h.adresse LIKE :search OR h.type LIKE :search OR h.maxguest LIKE :search OR h.room LIKE :search')
    ->setParameter('search', $searchData)
    ->getQuery()
    ->getResult();
    
}

    public function findAllWithAverageRatingAndSort($sortBy = 'averageRating', $sortDirection = 'DESC')
    {
        $qb = $this->createQueryBuilder('h')
        ->leftJoin('h.avis', 'a')
        ->addSelect('h.id','h.adresse','h.type','h.description','h.image','h.prix','h.amenities','h.room','h.maxguest','AVG(a.rating) as averageRating')
        ->groupBy('h.id');

    if ($sortBy === 'averageRating') {
        $qb->orderBy('averageRating', $sortDirection);
    } elseif ($sortBy === 'prix') {
        $qb->orderBy('h.prix', $sortDirection);
    }

    return $qb->getQuery()->getResult();
    }

    public function countByTypeReservations()
{
    // Remplacez 'type' par la propriété réelle utilisée pour catégoriser les hébergements
    $qb = $this->createQueryBuilder('h')
               ->leftJoin('h.reservations', 'r')
               ->select('h.type, COUNT(r) as count')
               ->groupBy('h.type');

    return $qb->getQuery()->getResult();
}
//    /**
//     * @return Hebergement[] Returns an array of Hebergement objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('h.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Hebergement
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
