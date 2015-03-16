<?php

namespace Pidev\ReaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appartement
 *
 * @ORM\Table(name="appartement")
 * @ORM\Entity
 */
class Appartement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="etage", type="integer", nullable=false)
     */
    private $etage;

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
     * Set etage
     *
     * @param integer $etage
     * @return Appartement
     */
    public function setEtage($etage)
    {
        $this->etage = $etage;

        return $this;
    }

    /**
     * Get etage
     *
     * @return integer 
     */
    public function getEtage()
    {
        return $this->etage;
    }

    /**
     * Set nbrchambre
     *
     * @param integer $nbrchambre
     * @return Appartement
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
     * @return Appartement
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
     * @return Appartement
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
     * @return Appartement
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
     * @return Appartement
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
     * Set balcon
     *
     * @param boolean $balcon
     * @return Appartement
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
     * @return Appartement
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
     * @return Appartement
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
     * @return Appartement
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
     * @return Appartement
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
     * @return Appartement
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
