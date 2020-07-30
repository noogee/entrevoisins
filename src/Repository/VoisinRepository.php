<?php

namespace App\Repository;

use App\Entity\Voisin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Voisin|null find($id, $lockMode = null, $lockVersion = null)
 * @method Voisin|null findOneBy(array $criteria, array $orderBy = null)
 * @method Voisin[]    findAll()
 * @method Voisin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VoisinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Voisin::class);
    }

    // /**
    //  * @return Voisin[] Returns an array of Voisin objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Voisin
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
