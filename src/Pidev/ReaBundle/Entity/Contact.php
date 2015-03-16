<?php

namespace Pidev\ReaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact", indexes={@ORM\Index(name="contact_ibfk_1", columns={"idClient1"}), @ORM\Index(name="contact_ibfk_2", columns={"idGerant"})})
 * @ORM\Entity
 */
class Contact
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateContact", type="date", nullable=false)
     */
    private $datecontact;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="string", length=400, nullable=false)
     */
    private $sujet;

    /**
     * @var string
     *
     * @ORM\Column(name="contenue", type="string", length=400, nullable=false)
     */
    private $contenue;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse", type="string", length=600, nullable=true)
     */
    private $reponse = 'question';

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idGerant", referencedColumnName="id")
     * })
     */
    private $idgerant;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient1", referencedColumnName="id")
     * })
     */
    private $idclient1;



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
     * Set datecontact
     *
     * @param \DateTime $datecontact
     * @return Contact
     */
    public function setDatecontact($datecontact)
    {
        $this->datecontact = $datecontact;

        return $this;
    }

    /**
     * Get datecontact
     *
     * @return \DateTime 
     */
    public function getDatecontact()
    {
        return $this->datecontact;
    }

    /**
     * Set sujet
     *
     * @param string $sujet
     * @return Contact
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return string 
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set contenue
     *
     * @param string $contenue
     * @return Contact
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
     * Set reponse
     *
     * @param string $reponse
     * @return Contact
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return string 
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * Set idgerant
     *
     * @param \Pidev\ReaBundle\Entity\Utilisateur $idgerant
     * @return Contact
     */
    public function setIdgerant(\Pidev\ReaBundle\Entity\Utilisateur $idgerant = null)
    {
        $this->idgerant = $idgerant;

        return $this;
    }

    /**
     * Get idgerant
     *
     * @return \Pidev\ReaBundle\Entity\Utilisateur 
     */
    public function getIdgerant()
    {
        return $this->idgerant;
    }

    /**
     * Set idclient1
     *
     * @param \Pidev\ReaBundle\Entity\Utilisateur $idclient1
     * @return Contact
     */
    public function setIdclient1(\Pidev\ReaBundle\Entity\Utilisateur $idclient1 = null)
    {
        $this->idclient1 = $idclient1;

        return $this;
    }

    /**
     * Get idclient1
     *
     * @return \Pidev\ReaBundle\Entity\Utilisateur 
     */
    public function getIdclient1()
    {
        return $this->idclient1;
    }
}
