<?php

namespace Pidev\ReaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rendezvous
 *
 * @ORM\Table(name="rendezvous", indexes={@ORM\Index(name="rendezvous_ibfk_3", columns={"IdOffre"}), @ORM\Index(name="rendezvous_ibfk_1", columns={"idAgent"}), @ORM\Index(name="rendezvous_ibfk_2", columns={"IdClient1"})})
 * @ORM\Entity
 */
class Rendezvous
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
     * @ORM\Column(name="DateRendezVous", type="datetime", nullable=false)
     */
    private $daterendezvous = 'CURRENT_TIMESTAMP';

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdOffre", referencedColumnName="id")
     * })
     */
    private $idoffre;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAgent", referencedColumnName="id")
     * })
     */
    private $idagent;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdClient1", referencedColumnName="IdClient")
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
     * Set daterendezvous
     *
     * @param \DateTime $daterendezvous
     * @return Rendezvous
     */
    public function setDaterendezvous($daterendezvous)
    {
        $this->daterendezvous = $daterendezvous;

        return $this;
    }

    /**
     * Get daterendezvous
     *
     * @return \DateTime 
     */
    public function getDaterendezvous()
    {
        return $this->daterendezvous;
    }

    /**
     * Set idoffre
     *
     * @param \Pidev\ReaBundle\Entity\Offre $idoffre
     * @return Rendezvous
     */
    public function setIdoffre(\Pidev\ReaBundle\Entity\Offre $idoffre = null)
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

    /**
     * Set idagent
     *
     * @param \Pidev\ReaBundle\Entity\Utilisateur $idagent
     * @return Rendezvous
     */
    public function setIdagent(\Pidev\ReaBundle\Entity\Utilisateur $idagent = null)
    {
        $this->idagent = $idagent;

        return $this;
    }

    /**
     * Get idagent
     *
     * @return \Pidev\ReaBundle\Entity\Utilisateur 
     */
    public function getIdagent()
    {
        return $this->idagent;
    }

    /**
     * Set idclient1
     *
     * @param \Pidev\ReaBundle\Entity\Client $idclient1
     * @return Rendezvous
     */
    public function setIdclient1(\Pidev\ReaBundle\Entity\Client $idclient1 = null)
    {
        $this->idclient1 = $idclient1;

        return $this;
    }

    /**
     * Get idclient1
     *
     * @return \Pidev\ReaBundle\Entity\Client 
     */
    public function getIdclient1()
    {
        return $this->idclient1;
    }
}
