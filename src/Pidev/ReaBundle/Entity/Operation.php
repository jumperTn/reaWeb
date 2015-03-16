<?php

namespace Pidev\ReaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operation
 *
 * @ORM\Table(name="operation", indexes={@ORM\Index(name="operation_ibfk_1", columns={"idRDV"})})
 * @ORM\Entity
 */
class Operation
{
    /**
     * @var string
     *
     * @ORM\Column(name="numContrat", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numcontrat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOperation", type="date", nullable=false)
     */
    private $dateoperation;

    /**
     * @var string
     *
     * @ORM\Column(name="nature", type="string", length=30, nullable=false)
     */
    private $nature;

    /**
     * @var \Rendezvous
     *
     * @ORM\ManyToOne(targetEntity="Rendezvous")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRDV", referencedColumnName="id")
     * })
     */
    private $idrdv;



    /**
     * Get numcontrat
     *
     * @return string 
     */
    public function getNumcontrat()
    {
        return $this->numcontrat;
    }

    /**
     * Set dateoperation
     *
     * @param \DateTime $dateoperation
     * @return Operation
     */
    public function setDateoperation($dateoperation)
    {
        $this->dateoperation = $dateoperation;

        return $this;
    }

    /**
     * Get dateoperation
     *
     * @return \DateTime 
     */
    public function getDateoperation()
    {
        return $this->dateoperation;
    }

    /**
     * Set nature
     *
     * @param string $nature
     * @return Operation
     */
    public function setNature($nature)
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get nature
     *
     * @return string 
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set idrdv
     *
     * @param \Pidev\ReaBundle\Entity\Rendezvous $idrdv
     * @return Operation
     */
    public function setIdrdv(\Pidev\ReaBundle\Entity\Rendezvous $idrdv = null)
    {
        $this->idrdv = $idrdv;

        return $this;
    }

    /**
     * Get idrdv
     *
     * @return \Pidev\ReaBundle\Entity\Rendezvous 
     */
    public function getIdrdv()
    {
        return $this->idrdv;
    }
}
