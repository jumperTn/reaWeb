<?php

namespace Pidev\ReaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rapportprorpriete
 *
 * @ORM\Table(name="rapportprorpriete", indexes={@ORM\Index(name="idoffre", columns={"idoffre"}), @ORM\Index(name="idRapporteur", columns={"idRapporteur"}), @ORM\Index(name="IDX_1DDD050AE8DCB6E", columns={"idRapport"})})
 * @ORM\Entity
 */
class Rapportprorpriete
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
     * @var \Offre
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idoffre", referencedColumnName="id")
     * })
     */
    private $idoffre;



    /**
     * Set contenue
     *
     * @param string $contenue
     * @return Rapportprorpriete
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
     * @return Rapportprorpriete
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
     * @return Rapportprorpriete
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
     * Set idoffre
     *
     * @param \Pidev\ReaBundle\Entity\Offre $idoffre
     * @return Rapportprorpriete
     */
    public function setIdoffre(\Pidev\ReaBundle\Entity\Offre $idoffre)
    {
        $this->idoffre = $idoffre;

        return $this;
    }

    /**
     * Get idoffre
     *
     * @return \Pidev\ReaBundle\Entity\Offre 
     */
    public function getIdoffre()
    {
        return $this->idoffre;
    }
}
