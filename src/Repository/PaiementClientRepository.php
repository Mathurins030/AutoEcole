<?php

namespace App\Repository;

use App\Entity\PaiementClient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PaiementClient|null find($id, $lockMode = null, $lockVersion = null)
 * @method PaiementClient|null findOneBy(array $criteria, array $orderBy = null)
 * @method PaiementClient[]    findAll()
 * @method PaiementClient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaiementClientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PaiementClient::class);
    }

    // /**
    //  * @return PaiementClient[] Returns an array of PaiementClient objects
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
    public function findOneBySomeField($value): ?PaiementClient
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
