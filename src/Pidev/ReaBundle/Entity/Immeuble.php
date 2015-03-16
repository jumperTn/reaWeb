<?php

namespace Pidev\ReaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Immeuble
 *
 * @ORM\Table(name="immeuble")
 * @ORM\Entity
 */
class Immeuble
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
     * @ORM\Column(name="nbrAppartement", type="integer", nullable=false)
     */
    private $nbrappartement;

    /**
     * @var \Offre
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idOffre", referencedColumnName="id")
     * })
     */
    private $idoffre;



    /**
     * Set nbretage
     *
     * @param integer $nbretage
     * @return Immeuble
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
     * @return Immeuble
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
     * Set idoffre
     *
     * @param \Pidev\ReaBundle\Entity\Offre $idoffre
     * @return Immeuble
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
