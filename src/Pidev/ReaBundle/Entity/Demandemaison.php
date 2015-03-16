<?php

namespace Pidev\ReaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demandemaison
 *
 * @ORM\Table(name="demandemaison")
 * @ORM\Entity
 */
class Demandemaison
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nbrPiece", type="integer", nullable=false)
     */
    private $nbrpiece;

    /**
     * @var string
     *
     * @ORM\Column(name="typeUsage", type="string", length=60, nullable=false)
     */
    private $typeusage;

    /**
     * @var string
     *
     * @ORM\Column(name="nbrEtage", type="string", length=60, nullable=false)
     */
    private $nbretage;

    /**
     * @var \Demande
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Demande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDemande", referencedColumnName="id")
     * })
     */
    private $iddemande;



    /**
     * Set nbrpiece
     *
     * @param integer $nbrpiece
     * @return Demandemaison
     */
    public function setNbrpiece($nbrpiece)
    {
        $this->nbrpiece = $nbrpiece;

        return $this;
    }

    /**
     * Get nbrpiece
     *
     * @return integer 
     */
    public function getNbrpiece()
    {
        return $this->nbrpiece;
    }

    /**
     * Set typeusage
     *
     * @param string $typeusage
     * @return Demandemaison
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
     * Set nbretage
     *
     * @param string $nbretage
     * @return Demandemaison
     */
    public function setNbretage($nbretage)
    {
        $this->nbretage = $nbretage;

        return $this;
    }

    /**
     * Get nbretage
     *
     * @return string 
     */
    public function getNbretage()
    {
        return $this->nbretage;
    }

    /**
     * Set iddemande
     *
     * @param \Pidev\ReaBundle\Entity\Demande $iddemande
     * @return Demandemaison
     */
    public function setIddemande(\Pidev\ReaBundle\Entity\Demande $iddemande)
    {
        $this->iddemande = $iddemande;

        return $this;
    }

    /**
     * Get iddemande
     *
     * @return \Pidev\ReaBundle\Entity\Demande 
     */
    public function getIddemande()
    {
        return $this->iddemande;
    }
}
