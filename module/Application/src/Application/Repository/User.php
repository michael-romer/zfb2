<?php
namespace Application\Repository;

use Doctrine\ORM\EntityRepository;

class User extends EntityRepository
{
    public function myCustomFinder()
    {
        $qb = $this->createQueryBuilder('findAll');
        // built your query here using the $qb
        // return $qb->getQuery()->getResult();
        return array();
    }
}