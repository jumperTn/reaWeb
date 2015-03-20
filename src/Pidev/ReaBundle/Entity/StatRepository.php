<?php

namespace Pidev\ReaBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;

class StatRepository extends EntityRepository {

    public function nbrAgence() {
        $query = $this->getEntityManager()->createQueryBuilder()->select("count(a) as nbr, substring(a.adresse,locate(',',a.adresse)+1) as secteur ")
                ->from("PidevReaBundle:Agence", "a")
                ->groupBy("secteur")
                ->getQuery()
                ->getResult();
        return $query;
    }

    public function nbrInscritMois() {
        $query = $this->getEntityManager()->createQueryBuilder()->select("count(u) as nbr, substring(u.datecreation,1,4) as year , substring(u.datecreation,6,2)as mois")
                ->from("PidevReaBundle:Utilisateur", "u")
                ->groupBy("year")
                ->groupBy("mois")
                ->orderBy("year")
                ->getQuery()
                ->getResult();
        return $query;
    }

    public function nbrOffreClientAgence($id) {
        $sql = "select count(*)as nbr ,type as type ,prenom as prenom  from offre,utilisateur where idClient1 in (select IdClient from client where idAgence1=$id) and IdClient1=utilisateur.id group by type,IdClient1 order by idClient1";


        $rsm = new ResultSetMapping();
        $rsm->addScalarResult('nbr', 'nbr');
        $rsm->addScalarResult('type', 'type');
        $rsm->addScalarResult('prenom', 'prenom');
        $query = $this->_em->createNativeQuery($sql, $rsm);
        return $query->getResult();
    }

    public function offreAgence($id) {
        $sql = "select count(*)as nbr ,type as type,idZone as idZone from offre where idAgent in (select id as id from utilisateur where idAgence4=$id and role='agent') and IdClient1 is null  group by type order by idZone";
        $rsm = new ResultSetMapping();
        $rsm->addScalarResult('nbr', 'nbr');
        $rsm->addScalarResult('type', 'type');
        $rsm->addScalarResult('idZone', 'idZone');
        $query = $this->_em->createNativeQuery($sql, $rsm);
        return $query->getResult();
    }

    public function nbrRdvClientAgence($id) {
        $sql = "SELECT count( * ) as nbr,prenom as prenom
FROM rendezvous,utilisateur
where 	utilisateur.id=IdClient1
and idAgent in(select id from utilisateur
               where role='agent' and IdAgence4=$id)
GROUP BY IdClient1
";
        $rsm = new ResultSetMapping();
        $rsm->addScalarResult('nbr', 'nbr');
        $rsm->addScalarResult('prenom', 'prenom');
        $query = $this->_em->createNativeQuery($sql, $rsm);
        return $query->getResult();
    }
    public function nbrRdvAgenttAgence($id) {
        $sql = "SELECT count( * ) as nbr,prenom as prenom FROM rendezvous,utilisateur where utilisateur.id=idAgent and idAgent in(select utilisateur.id from utilisateur where role='agent' and IdAgence4=$id)GROUP BY idAgent";
        $rsm = new ResultSetMapping();
        $rsm->addScalarResult('nbr', 'nbr');
        $rsm->addScalarResult('prenom', 'prenom');
        $query = $this->_em->createNativeQuery($sql, $rsm);
        return $query->getResult();
    }
public function nbrOperationClientAgence($id) {
        $sql = "select count(*) as nbr,prenom as prenom  from rendezvous,utilisateur where rendezvous.id in (select idrdv from operation where idAgent in (select Utilisateur.id from utilisateur where idAgence4=$id)  ) and idClient1=Utilisateur.id and utilisateur.id in (select idclient from client where idAgence1=$id) group by Utilisateur.id";
        $rsm = new ResultSetMapping();
        $rsm->addScalarResult('nbr', 'nbr');
        $rsm->addScalarResult('prenom', 'prenom');
        $query = $this->_em->createNativeQuery($sql, $rsm);
        return $query->getResult();
    }
}
