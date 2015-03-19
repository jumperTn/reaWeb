<?php

namespace Pidev\ReaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="offre", indexes={@ORM\Index(name="offre_ibfk_3", columns={"idZone"}), @ORM\Index(name="offre_ibfk_1", columns={"idAgent"}), @ORM\Index(name="offre_ibfk_2", columns={"idClient1"})})
 * @ORM\Entity
 */
class Offre
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
     * @ORM\Column(name="adresse", type="string", length=200, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="etatBien", type="string", length=8, nullable=false)
     */
    private $etatbien;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="typeOperation", type="string", length=20, nullable=false)
     */
    private $typeoperation;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=30, nullable=false)
     */
    private $etat;

    /**
     * @var float
     *
     * @ORM\Column(name="surface", type="float", precision=10, scale=0, nullable=false)
     */
    private $surface;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=600, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="typeUsage", type="string", length=60, nullable=false)
     */
    private $typeusage;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private $type = 'terrain';

    /**
     * @var float
     *
     * @ORM\Column(name="x", type="float", precision=10, scale=0, nullable=false)
     */
    private $x;

    /**
     * @var float
     *
     * @ORM\Column(name="y", type="float", precision=10, scale=0, nullable=false)
     */
    private $y;

    /**
     * @var \Zone
     *
     * @ORM\ManyToOne(targetEntity="Zone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idZone", referencedColumnName="id")
     * })
     */
    private $idzone;

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
     *   @ORM\JoinColumn(name="idClient1", referencedColumnName="IdClient")
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
     * Set adresse
     *
     * @param string $adresse
     * @return Offre
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
     * Set etatbien
     *
     * @param string $etatbien
     * @return Offre
     */
    public function setEtatbien($etatbien)
    {
        $this->etatbien = $etatbien;

        return $this;
    }

    /**
     * Get etatbien
     *
     * @return string 
     */
    public function getEtatbien()
    {
        return $this->etatbien;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Offre
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set typeoperation
     *
     * @param string $typeoperation
     * @return Offre
     */
    public function setTypeoperation($typeoperation)
    {
        $this->typeoperation = $typeoperation;

        return $this;
    }

    /**
     * Get typeoperation
     *
     * @return string 
     */
    public function getTypeoperation()
    {
        return $this->typeoperation;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Offre
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set surface
     *
     * @param float $surface
     * @return Offre
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface
     *
     * @return float 
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Offre
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set typeusage
     *
     * @param string $typeusage
     * @return Offre
     */
    public function setTypeusage($typeusage)
    {
        $this->typeusage = $typeusage;

        return $this;
    }

    /**
     * Get typeusage
     *
     * @return string 
     */
    public function getTypeusage()
    {
        return $this->typeusage;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Offre
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set x
     *
     * @param float $x
     * @return Offre
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get x
     *
     * @return float 
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set y
     *
     * @param float $y
     * @return Offre
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get y
     *
     * @return float 
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set idzone
     *
     * @param \Pidev\ReaBundle\Entity\Zone $idzone
     * @return Offre
     */
    public function setIdzone(\Pidev\ReaBundle\Entity\Zone $idzone = null)
    {
        $this->idzone = $idzone;

        return $this;
    }

    /**
     * Get idzone
     *
     * @return \Pidev\ReaBundle\Entity\Zone 
     */
    public function getIdzone()
    {
        return $this->idzone;
    }

    /**
     * Set idagent
     *
     * @param \Pidev\ReaBundle\Entity\Utilisateur $idagent
     * @return Offre
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
     * @return Offre
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
        public function __toString()
{
     try {
return (string) $this->id;
} catch (Exception $exception) {
return '';
} 
}
}
