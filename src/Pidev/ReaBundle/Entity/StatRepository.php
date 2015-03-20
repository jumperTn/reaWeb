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
}
public function offreAgence($id){
$sql = "select count(*)as nbr ,type as type,idZone as idZone from offre where idAgent in (select id as id from utilisateur where idAgence4=$id and role='agent') and IdClient1 is null  group by type order by idZone";


$rsm = new ResultSetMapping();
$rsm->addScalarResult('nbr', 'nbr');
$rsm->addScalarResult('type', 'type');
$rsm->addScalarResult('idZone', 'idZone');
$query = $this->_em->createNativeQuery($sql, $rsm);
return $query->getResult();    
}
}