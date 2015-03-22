<?php

namespace Pidev\ReaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", indexes={@ORM\Index(name="utilisateur_ibfk_1", columns={"IdAgence4"})})
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    public function setId($id) {
        $this->id = $id;
    }

        /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=40, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="CIN", type="string", length=8, nullable=false)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=60, nullable=false)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="nomUtilisateur", type="string", length=20, nullable=false)
     */
    private $nomutilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="motPAsse", type="string", length=20, nullable=false)
     */
    private $motpasse;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=40, nullable=false)
     */
    private $role;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="date", nullable=false)
     */
    private $datecreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateModification", type="date", nullable=true)
     */
    private $datemodification;

    /**
     * @var string
     *
     * @ORM\Column(name="numTel", type="string", length=13, nullable=false)
     */
    private $numtel;

    /**
     * @var \Agence
     *
     * @ORM\ManyToOne(targetEntity="Agence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdAgence4", referencedColumnName="id")
     * })
     */
    private $idagence4;



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
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set cin
     *
     * @param string $cin
     * @return Utilisateur
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string 
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Utilisateur
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set nomutilisateur
     *
     * @param string $nomutilisateur
     * @return Utilisateur
     */
    public function setNomutilisateur($nomutilisateur)
    {
        $this->nomutilisateur = $nomutilisateur;

        return $this;
    }

    /**
     * Get nomutilisateur
     *
     * @return string 
     */
    public function getNomutilisateur()
    {
        return $this->nomutilisateur;
    }

    /**
     * Set motpasse
     *
     * @param string $motpasse
     * @return Utilisateur
     */
    public function setMotpasse($motpasse)
    {
        $this->motpasse = $motpasse;

        return $this;
    }

    /**
     * Get motpasse
     *
     * @return string 
     */
    public function getMotpasse()
    {
        return $this->motpasse;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return Utilisateur
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Utilisateur
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime 
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set datemodification
     *
     * @param \DateTime $datemodification
     * @return Utilisateur
     */
    public function setDatemodification($datemodification)
    {
        $this->datemodification = $datemodification;

        return $this;
    }

    /**
     * Get datemodification
     *
     * @return \DateTime 
     */
    public function getDatemodification()
    {
        return $this->datemodification;
    }

    /**
     * Set numtel
     *
     * @param string $numtel
     * @return Utilisateur
     */
    public function setNumtel($numtel)
    {
        $this->numtel = $numtel;

        return $this;
    }

    /**
     * Get numtel
     *
     * @return string 
     */
    public function getNumtel()
    {
        return $this->numtel;
    }

    /**
     * Set idagence4
     *
     * @param \Pidev\ReaBundle\Entity\Agence $idagence4
     * @return Utilisateur
     */
    public function setIdagence4(\Pidev\ReaBundle\Entity\Agence $idagence4 = null)
    {
        $this->idagence4 = $idagence4;

        return $this;
    }

    /**
     * Get idagence4
     *
     * @return \Pidev\ReaBundle\Entity\Agence 
     */
    public function getIdagence4()
    {
        return $this->idagence4;
    }
     public function __toString()
{
try {
return (string) $this->nomutilisateur;
} catch (Exception $exception) {
return '';
}
}
}
