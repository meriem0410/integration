<?php

namespace App\Repository;

use App\Entity\Voypersonalise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Voypersonalise>
 *
 * @method Voypersonalise|null find($id, $lockMode = null, $lockVersion = null)
 * @method Voypersonalise|null findOneBy(array $criteria, array $orderBy = null)
 * @method Voypersonalise[]    findAll()
 * @method Voypersonalise[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VoypersonaliseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Voypersonalise::class);
    }

//    /**
//     * @return Voypersonalise[] Returns an array of Voypersonalise objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Voypersonalise
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
