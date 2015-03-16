<?php

namespace Pidev\ReaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demandeimmeuble
 *
 * @ORM\Table(name="demandeimmeuble")
 * @ORM\Entity
 */
class Demandeimmeuble
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nbrEtage", type="integer", nullable=false)
     */
    private $nbretage;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrappartement", type="integer", nullable=false)
     */
    private $nbrappartement;

    /**
     * @var \Demande
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Demande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDemande", referencedColumnName="id")
     * })
     */
    private $iddemande;



    /**
     * Set nbretage
     *
     * @param integer $nbretage
     * @return Demandeimmeuble
     */
    public function setNbretage($nbretage)
    {
        $this->nbretage = $nbretage;

        return $this;
    }

    /**
     * Get nbretage
     *
     * @return integer 
     */
    public function getNbretage()
    {
        return $this->nbretage;
    }

    /**
     * Set nbrappartement
     *
     * @param integer $nbrappartement
     * @return Demandeimmeuble
     */
    public function setNbrappartement($nbrappartement)
    {
        $this->nbrappartement = $nbrappartement;

        return $this;
    }

    /**
     * Get nbrappartement
     *
     * @return integer 
     */
    public function getNbrappartement()
    {
        return $this->nbrappartement;
    }

    /**
     * Set iddemande
     *
     * @param \Pidev\ReaBundle\Entity\Demande $iddemande
     * @return Demandeimmeuble
     */
    public function setIddemande(\Pidev\ReaBundle\Entity\Demande $iddemande)
    {
        $this->iddemande = $iddemande;

        return $this;
    }

    /**
     * Get iddemande
     *
     * @return \Pidev\ReaBundle\Entity\Demande 
     */
    public function getIddemande()
    {
        return $this->iddemande;
    }
}
