<?php

namespace App\Repository;

use App\Entity\SkillMysticCode;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SkillMysticCode|null find($id, $lockMode = null, $lockVersion = null)
 * @method SkillMysticCode|null findOneBy(array $criteria, array $orderBy = null)
 * @method SkillMysticCode[]    findAll()
 * @method SkillMysticCode[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SkillMysticCodeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SkillMysticCode::class);
    }

//    /**
//     * @return SkillMysticCode[] Returns an array of SkillMysticCode objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SkillMysticCode
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
