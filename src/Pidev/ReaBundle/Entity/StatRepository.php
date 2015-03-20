<?php

namespace Pidev\ReaBundle\Entity;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;
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
public function nbrOffreClientAgence($id){
$sql = "select count(*)as nbr ,type as type ,prenom as prenom  from offre,utilisateur where idClient1 in (select IdClient from client where idAgence1=$id) and IdClient1=utilisateur.id group by type,IdClient1 order by idClient1";


$rsm = new ResultSetMapping();
$rsm->addScalarResult('nbr', 'nbr');
$rsm->addScalarResult('type', 'type');
$rsm->addScalarResult('prenom', 'prenom');
$query = $this->_em->createNativeQuery($sql, $rsm);
return $query->getResult();
    /*/
    $query=$this->getEntityManager()->createQueryBuilder()->select("count(o.idClient1)as nbr ,o.type as type ,u.prenom as prenom ,o.idClient1 as idc")
       ->from("PidevReaBundle:Utilisateur", "u")
        ->from("PidevReaBundle:Offre", "o")
        ->where("idClient1 = (select (c.IdClient from PidevReaBundle:Client c where idAgence1=1))")
        ->andWhere("IdClient1=u.id")
        ->groupBy("type")
        ->groupBy("idc")
        ->getQuery()
        ->getResult();
return $query;
     //*/
     
}
}