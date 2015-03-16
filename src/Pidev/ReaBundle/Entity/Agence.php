<?php

namespace Pidev\ReaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agence
 *
 * @ORM\Table(name="agence")
 * @ORM\Entity
 */
class Agence
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
     * @ORM\Column(name="nomAgance", type="string", length=20, nullable=false)
     */
    private $nomagance;

    /**
     * @var string
     *
     * @ORM\Column(name="Logo", type="string", length=400, nullable=false)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=200, nullable=false)
     */
    private $adresse;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Utilisateur", mappedBy="idagence")
     */
    private $idutilisateur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Agence", mappedBy="idclient")
     */
    private $idagence1;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idutilisateur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idagence1 = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Set nomagance
     *
     * @param string $nomagance
     * @return Agence
     */
    public function setNomagance($nomagance)
    {
        $this->nomagance = $nomagance;

        return $this;
    }

    /**
     * Get nomagance
     *
     * @return string 
     */
    public function getNomagance()
    {
        return $this->nomagance;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Agence
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Agence
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Add idutilisateur
     *
     * @param \Pidev\ReaBundle\Entity\Utilisateur $idutilisateur
     * @return Agence
     */
    public function addIdutilisateur(\Pidev\ReaBundle\Entity\Utilisateur $idutilisateur)
    {
        $this->idutilisateur[] = $idutilisateur;

        return $this;
    }

    /**
     * Remove idutilisateur
     *
     * @param \Pidev\ReaBundle\Entity\Utilisateur $idutilisateur
     */
    public function removeIdutilisateur(\Pidev\ReaBundle\Entity\Utilisateur $idutilisateur)
    {
        $this->idutilisateur->removeElement($idutilisateur);
    }

    /**
     * Get idutilisateur
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }

    /**
     * Add idagence1
     *
     * @param \Pidev\ReaBundle\Entity\Agence $idagence1
     * @return Agence
     */
    public function addIdagence1(\Pidev\ReaBundle\Entity\Agence $idagence1)
    {
        $this->idagence1[] = $idagence1;

        return $this;
    }

    /**
     * Remove idagence1
     *
     * @param \Pidev\ReaBundle\Entity\Agence $idagence1
     */
    public function removeIdagence1(\Pidev\ReaBundle\Entity\Agence $idagence1)
    {
        $this->idagence1->removeElement($idagence1);
    }

    /**
     * Get idagence1
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdagence1()
    {
        return $this->idagence1;
    }
}
