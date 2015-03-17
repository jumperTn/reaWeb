<?php

namespace Pidev\ReaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rapportprorpriete
 *
 * @ORM\Table(name="rapportprorpriete", uniqueConstraints={@ORM\UniqueConstraint(name="idRapport_2", columns={"idRapport", "idoffre", "idRapporteur"})}, indexes={@ORM\Index(name="idoffre", columns={"idoffre"}), @ORM\Index(name="idRapporteur", columns={"idRapporteur"}), @ORM\Index(name="idRapport", columns={"idRapport"})})
 * @ORM\Entity
 */
class Rapportprorpriete
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
     * @ORM\Column(name="contenue", type="string", length=500, nullable=false)
     */
    private $contenue;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idoffre", referencedColumnName="id")
     * })
     */
    private $idoffre;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRapporteur", referencedColumnName="id")
     * })
     */
    private $idrapporteur;

    /**
     * @var \Rapport
     *
     * @ORM\ManyToOne(targetEntity="Rapport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRapport", referencedColumnName="id")
     * })
     */
    private $idrapport;



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
     * Set idoffre
     *
     * @param \Pidev\ReaBundle\Entity\Offre $idoffre
     * @return Rapportprorpriete
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
     * Set idrapporteur
     *
     * @param \Pidev\ReaBundle\Entity\Utilisateur $idrapporteur
     * @return Rapportprorpriete
     */
    public function setIdrapporteur(\Pidev\ReaBundle\Entity\Utilisateur $idrapporteur = null)
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
    public function setIdrapport(\Pidev\ReaBundle\Entity\Rapport $idrapport = null)
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
}
