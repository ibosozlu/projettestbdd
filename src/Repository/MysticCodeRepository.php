<?php

namespace App\Repository;

use App\Entity\MysticCode;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MysticCode|null find($id, $lockMode = null, $lockVersion = null)
 * @method MysticCode|null findOneBy(array $criteria, array $orderBy = null)
 * @method MysticCode[]    findAll()
 * @method MysticCode[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MysticCodeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MysticCode::class);
    }

//    /**
//     * @return MysticCode[] Returns an array of MysticCode objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MysticCode
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
