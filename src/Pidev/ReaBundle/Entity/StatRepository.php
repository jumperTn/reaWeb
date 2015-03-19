<?php

namespace Pidev\ReaBundle\Entity;
use Doctrine\ORM\EntityRepository;

class StatRepository extends EntityRepository{

public function nbrAgence(){
$query=$this->getEntityManager()->createQueryBuilder()->select("count(a) as nbr, substring(a.adresse,locate(',',a.adresse)+1) as secteur ")
       ->from("PidevReaBundle:Agence", "a")
        ->groupBy("secteur")
        ->getQuery()
        ->getResult();
return $query;
}
public function nbrInscritMois(){
$query=$this->getEntityManager()->createQueryBuilder()->select("count(u) as nbr, substring(u.datecreation,1,4) as year , substring(u.datecreation,6,2)as mois")
       ->from("PidevReaBundle:Utilisateur", "u")
        ->groupBy("year")
        ->groupBy("mois")
        ->orderBy("year")
        ->getQuery()
        ->getResult();
return $query;
}

}