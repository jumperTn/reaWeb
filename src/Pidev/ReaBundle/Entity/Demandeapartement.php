<?php

namespace Pidev\ReaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demandeapartement
 *
 * @ORM\Table(name="demandeapartement")
 * @ORM\Entity
 */
class Demandeapartement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nbrPiece", type="integer", nullable=false)
     */
    private $nbrpiece;

    /**
     * @var integer
     *
     * @ORM\Column(name="etage", type="integer", nullable=false)
     */
    private $etage;

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
     * @return Demandeapartement
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
     * Set etage
     *
     * @param integer $etage
     * @return Demandeapartement
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
     * Set iddemande
     *
     * @param \Pidev\ReaBundle\Entity\Demande $iddemande
     * @return Demandeapartement
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
