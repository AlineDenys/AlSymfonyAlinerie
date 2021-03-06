<?php

namespace Al\AlinerieBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends EntityRepository
{
    public function getArticles($limit){
	
	$qb = $this 
	->createQueryBuilder('a')
	->addSelect('a')
	->orderBy('a.date','DESC')
	->setMaxResults( $limit );
	
	return $qb ->getQuery()->getResult();
	}
    
       public function getDernierArticle(){
	
	$qb = $this 
	->createQueryBuilder('a')
	->addSelect('a')
	->orderBy('a.date','DESC')
	->setMaxResults( 1 );
	
	return $qb ->getQuery()->getSingleResult();
	}


}
