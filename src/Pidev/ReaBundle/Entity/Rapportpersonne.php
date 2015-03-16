<?php

namespace Pidev\ReaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rapportpersonne
 *
 * @ORM\Table(name="rapportpersonne", indexes={@ORM\Index(name="rapportpersonne_ibfk_3", columns={"idRapporteur"}), @ORM\Index(name="rapportpersonne_ibfk_2", columns={"idRdv"}), @ORM\Index(name="IDX_5648F1AE8DCB6E", columns={"idRapport"})})
 * @ORM\Entity
 */
class Rapportpersonne
{
    /**
     * @var string
     *
     * @ORM\Column(name="contenue", type="string", length=500, nullable=false)
     */
    private $contenue;

    /**
     * @var \Utilisateur
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRapporteur", referencedColumnName="id")
     * })
     */
    private $idrapporteur;

    /**
     * @var \Rapport
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Rapport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRapport", referencedColumnName="id")
     * })
     */
    private $idrapport;

    /**
     * @var \Rendezvous
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Rendezvous")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRdv", referencedColumnName="id")
     * })
     */
    private $idrdv;



    /**
     * Set contenue
     *
     * @param string $contenue
     * @return Rapportpersonne
     */
    public function setContenue($contenue)
    {
        $this->contenue = $contenue;

        return $this;
    }

    /**
     * Get contenue
     *
     * @return string 
     */
    public function getContenue()
    {
        return $this->contenue;
    }

    /**
     * Set idrapporteur
     *
     * @param \Pidev\ReaBundle\Entity\Utilisateur $idrapporteur
     * @return Rapportpersonne
     */
    public function setIdrapporteur(\Pidev\ReaBundle\Entity\Utilisateur $idrapporteur)
    {
        $this->idrapporteur = $idrapporteur;

        return $this;
    }

    /**
     * Get idrapporteur
     *
     * @return \Pidev\ReaBundle\Entity\Utilisateur 
     */
    public function getIdrapporteur()
    {
        return $this->idrapporteur;
    }

    /**
     * Set idrapport
     *
     * @param \Pidev\ReaBundle\Entity\Rapport $idrapport
     * @return Rapportpersonne
     */
    public function setIdrapport(\Pidev\ReaBundle\Entity\Rapport $idrapport)
    {
        $this->idrapport = $idrapport;

        return $this;
    }

    /**
     * Get idrapport
     *
     * @return \Pidev\ReaBundle\Entity\Rapport 
     */
    public function getIdrapport()
    {
        return $this->idrapport;
    }

    /**
     * Set idrdv
     *
     * @param \Pidev\ReaBundle\Entity\Rendezvous $idrdv
     * @return Rapportpersonne
     */
    public function setIdrdv(\Pidev\ReaBundle\Entity\Rendezvous $idrdv)
    {
        $this->idrdv = $idrdv;

        return $this;
    }

    /**
     * Get idrdv
     *
     * @return \Pidev\ReaBundle\Entity\Rendezvous 
     */
    public function getIdrdv()
    {
        return $this->idrdv;
    }
}
