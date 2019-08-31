<?php

namespace App\Repository;

use App\Entity\AccountFollow;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AccountFollow|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccountFollow|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccountFollow[]    findAll()
 * @method AccountFollow[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccountFollowRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AccountFollow::class);
    }

    // /**
    //  * @return AccountFollow[] Returns an array of AccountFollow objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AccountFollow
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
