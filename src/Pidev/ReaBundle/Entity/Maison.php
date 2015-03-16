<?php

namespace Pidev\ReaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maison
 *
 * @ORM\Table(name="maison")
 * @ORM\Entity
 */
class Maison
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nbrChambre", type="integer", nullable=false)
     */
    private $nbrchambre;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrSalleDebain", type="integer", nullable=false)
     */
    private $nbrsalledebain;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrCuisine", type="integer", nullable=false)
     */
    private $nbrcuisine;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrSallon", type="integer", nullable=false)
     */
    private $nbrsallon;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrSuite", type="integer", nullable=false)
     */
    private $nbrsuite;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrEtage", type="integer", nullable=false)
     */
    private $nbretage;

    /**
     * @var float
     *
     * @ORM\Column(name="surfaceHabitale", type="float", precision=10, scale=0, nullable=false)
     */
    private $surfacehabitale;

    /**
     * @var boolean
     *
     * @ORM\Column(name="terrasse", type="boolean", nullable=true)
     */
    private $terrasse;

    /**
     * @var boolean
     *
     * @ORM\Column(name="picine", type="boolean", nullable=true)
     */
    private $picine;

    /**
     * @var boolean
     *
     * @ORM\Column(name="garage", type="boolean", nullable=true)
     */
    private $garage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="balcon", type="boolean", nullable=true)
     */
    private $balcon;

    /**
     * @var boolean
     *
     * @ORM\Column(name="meuble", type="boolean", nullable=true)
     */
    private $meuble;

    /**
     * @var boolean
     *
     * @ORM\Column(name="chauffage", type="boolean", nullable=true)
     */
    private $chauffage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="climatisation", type="boolean", nullable=true)
     */
    private $climatisation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="parking", type="boolean", nullable=true)
     */
    private $parking;

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
     * Set nbrchambre
     *
     * @param integer $nbrchambre
     * @return Maison
     */
    public function setNbrchambre($nbrchambre)
    {
        $this->nbrchambre = $nbrchambre;

        return $this;
    }

    /**
     * Get nbrchambre
     *
     * @return integer 
     */
    public function getNbrchambre()
    {
        return $this->nbrchambre;
    }

    /**
     * Set nbrsalledebain
     *
     * @param integer $nbrsalledebain
     * @return Maison
     */
    public function setNbrsalledebain($nbrsalledebain)
    {
        $this->nbrsalledebain = $nbrsalledebain;

        return $this;
    }

    /**
     * Get nbrsalledebain
     *
     * @return integer 
     */
    public function getNbrsalledebain()
    {
        return $this->nbrsalledebain;
    }

    /**
     * Set nbrcuisine
     *
     * @param integer $nbrcuisine
     * @return Maison
     */
    public function setNbrcuisine($nbrcuisine)
    {
        $this->nbrcuisine = $nbrcuisine;

        return $this;
    }

    /**
     * Get nbrcuisine
     *
     * @return integer 
     */
    public function getNbrcuisine()
    {
        return $this->nbrcuisine;
    }

    /**
     * Set nbrsallon
     *
     * @param integer $nbrsallon
     * @return Maison
     */
    public function setNbrsallon($nbrsallon)
    {
        $this->nbrsallon = $nbrsallon;

        return $this;
    }

    /**
     * Get nbrsallon
     *
     * @return integer 
     */
    public function getNbrsallon()
    {
        return $this->nbrsallon;
    }

    /**
     * Set nbrsuite
     *
     * @param integer $nbrsuite
     * @return Maison
     */
    public function setNbrsuite($nbrsuite)
    {
        $this->nbrsuite = $nbrsuite;

        return $this;
    }

    /**
     * Get nbrsuite
     *
     * @return integer 
     */
    public function getNbrsuite()
    {
        return $this->nbrsuite;
    }

    /**
     * Set nbretage
     *
     * @param integer $nbretage
     * @return Maison
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
     * Set surfacehabitale
     *
     * @param float $surfacehabitale
     * @return Maison
     */
    public function setSurfacehabitale($surfacehabitale)
    {
        $this->surfacehabitale = $surfacehabitale;

        return $this;
    }

    /**
     * Get surfacehabitale
     *
     * @return float 
     */
    public function getSurfacehabitale()
    {
        return $this->surfacehabitale;
    }

    /**
     * Set terrasse
     *
     * @param boolean $terrasse
     * @return Maison
     */
    public function setTerrasse($terrasse)
    {
        $this->terrasse = $terrasse;

        return $this;
    }

    /**
     * Get terrasse
     *
     * @return boolean 
     */
    public function getTerrasse()
    {
        return $this->terrasse;
    }

    /**
     * Set picine
     *
     * @param boolean $picine
     * @return Maison
     */
    public function setPicine($picine)
    {
        $this->picine = $picine;

        return $this;
    }

    /**
     * Get picine
     *
     * @return boolean 
     */
    public function getPicine()
    {
        return $this->picine;
    }

    /**
     * Set garage
     *
     * @param boolean $garage
     * @return Maison
     */
    public function setGarage($garage)
    {
        $this->garage = $garage;

        return $this;
    }

    /**
     * Get garage
     *
     * @return boolean 
     */
    public function getGarage()
    {
        return $this->garage;
    }

    /**
     * Set balcon
     *
     * @param boolean $balcon
     * @return Maison
     */
    public function setBalcon($balcon)
    {
        $this->balcon = $balcon;

        return $this;
    }

    /**
     * Get balcon
     *
     * @return boolean 
     */
    public function getBalcon()
    {
        return $this->balcon;
    }

    /**
     * Set meuble
     *
     * @param boolean $meuble
     * @return Maison
     */
    public function setMeuble($meuble)
    {
        $this->meuble = $meuble;

        return $this;
    }

    /**
     * Get meuble
     *
     * @return boolean 
     */
    public function getMeuble()
    {
        return $this->meuble;
    }

    /**
     * Set chauffage
     *
     * @param boolean $chauffage
     * @return Maison
     */
    public function setChauffage($chauffage)
    {
        $this->chauffage = $chauffage;

        return $this;
    }

    /**
     * Get chauffage
     *
     * @return boolean 
     */
    public function getChauffage()
    {
        return $this->chauffage;
    }

    /**
     * Set climatisation
     *
     * @param boolean $climatisation
     * @return Maison
     */
    public function setClimatisation($climatisation)
    {
        $this->climatisation = $climatisation;

        return $this;
    }

    /**
     * Get climatisation
     *
     * @return boolean 
     */
    public function getClimatisation()
    {
        return $this->climatisation;
    }

    /**
     * Set parking
     *
     * @param boolean $parking
     * @return Maison
     */
    public function setParking($parking)
    {
        $this->parking = $parking;

        return $this;
    }

    /**
     * Get parking
     *
     * @return boolean 
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * Set idoffre
     *
     * @param \Pidev\ReaBundle\Entity\Offre $idoffre
     * @return Maison
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
