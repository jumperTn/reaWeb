<?php

namespace Pidev\ReaBundle\Entity;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;

class StatRepository extends EntityRepository{

public function nbrAgence(){
 //*/   
$rsm = new ResultSetMapping;
$rsm->addEntityResult('Agence', 'a');
$rsm->addFieldResult('a', 'id', 'id');
$rsm->addFieldResult('a', 'adresse', 'adresse');
$query=$this->getEntityManager()->createQueryBuilder()->select("count(a) as nbr, substring(a.adresse,locate(',',a.adresse)+1) as secteur ")
       ->from("PidevReaBundle:Agence", "a")
        ->groupBy("secteur")
        ->getQuery()
        ->getResult();
//*/
/*/  
  . "from agence  group by( substr(adresse,locate(',',adresse)+1))",$rsm) 
$query=$this->getEntityManager()
            ->createQuery("SELECT count(a) as nbr , (SUBSTRING(a.adresse,locate(',',a.adresse)+1))AS HIDDEN secteur "
                    . "  from PidevReaBundle:Agence a GROUP BY(secteur)")
            ;
//*/    

return $query;
    
}
}