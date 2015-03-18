<?php

namespace Pidev\ReaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zone
 *
 * @ORM\Table(name="zone")
 * @ORM\Entity
 */
class Zone
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=200, nullable=false)
     */
    private $libelle;

    /**
     * @var float
     *
     * @ORM\Column(name="Education", type="float", precision=10, scale=0, nullable=false)
     */
    private $education;

    /**
     * @var float
     *
     * @ORM\Column(name="Environement", type="float", precision=10, scale=0, nullable=false)
     */
    private $environement;

    /**
     * @var float
     *
     * @ORM\Column(name="secoursEtInterventionUrgence", type="float", precision=10, scale=0, nullable=false)
     */
    private $secoursetinterventionurgence;

    /**
     * @var float
     *
     * @ORM\Column(name="sante", type="float", precision=10, scale=0, nullable=false)
     */
    private $sante;

    /**
     * @var float
     *
     * @ORM\Column(name="loisirs", type="float", precision=10, scale=0, nullable=false)
     */
    private $loisirs;

    /**
     * @var float
     *
     * @ORM\Column(name="securite", type="float", precision=10, scale=0, nullable=false)
     */
    private $securite;

    /**
     * @var float
     *
     * @ORM\Column(name="transport", type="float", precision=10, scale=0, nullable=false)
     */
    private $transport;

    /**
     * @var float
     *
     * @ORM\Column(name="EauxUsees", type="float", precision=10, scale=0, nullable=false)
     */
    private $eauxusees;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrVote", type="integer", nullable=false)
     */
    private $nbrvote;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Zone
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set education
     *
     * @param float $education
     * @return Zone
     */
    public function setEducation($education)
    {
        $this->education = $education;

        return $this;
    }

    /**
     * Get education
     *
     * @return float 
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Set environement
     *
     * @param float $environement
     * @return Zone
     */
    public function setEnvironement($environement)
    {
        $this->environement = $environement;

        return $this;
    }

    /**
     * Get environement
     *
     * @return float 
     */
    public function getEnvironement()
    {
        return $this->environement;
    }

    /**
     * Set secoursetinterventionurgence
     *
     * @param float $secoursetinterventionurgence
     * @return Zone
     */
    public function setSecoursetinterventionurgence($secoursetinterventionurgence)
    {
        $this->secoursetinterventionurgence = $secoursetinterventionurgence;

        return $this;
    }

    /**
     * Get secoursetinterventionurgence
     *
     * @return float 
     */
    public function getSecoursetinterventionurgence()
    {
        return $this->secoursetinterventionurgence;
    }

    /**
     * Set sante
     *
     * @param float $sante
     * @return Zone
     */
    public function setSante($sante)
    {
        $this->sante = $sante;

        return $this;
    }

    /**
     * Get sante
     *
     * @return float 
     */
    public function getSante()
    {
        return $this->sante;
    }

    /**
     * Set loisirs
     *
     * @param float $loisirs
     * @return Zone
     */
    public function setLoisirs($loisirs)
    {
        $this->loisirs = $loisirs;

        return $this;
    }

    /**
     * Get loisirs
     *
     * @return float 
     */
    public function getLoisirs()
    {
        return $this->loisirs;
    }

    /**
     * Set securite
     *
     * @param float $securite
     * @return Zone
     */
    public function setSecurite($securite)
    {
        $this->securite = $securite;

        return $this;
    }

    /**
     * Get securite
     *
     * @return float 
     */
    public function getSecurite()
    {
        return $this->securite;
    }

    /**
     * Set transport
     *
     * @param float $transport
     * @return Zone
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;

        return $this;
    }

    /**
     * Get transport
     *
     * @return float 
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Set eauxusees
     *
     * @param float $eauxusees
     * @return Zone
     */
    public function setEauxusees($eauxusees)
    {
        $this->eauxusees = $eauxusees;

        return $this;
    }

    /**
     * Get eauxusees
     *
     * @return float 
     */
    public function getEauxusees()
    {
        return $this->eauxusees;
    }

    /**
     * Set nbrvote
     *
     * @param integer $nbrvote
     * @return Zone
     */
    public function setNbrvote($nbrvote)
    {
        $this->nbrvote = $nbrvote;

        return $this;
    }

    /**
     * Get nbrvote
     *
     * @return integer 
     */
    public function getNbrvote()
    {
        return $this->nbrvote;
    }
}
