<?php

namespace Pidev\ReaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client", uniqueConstraints={@ORM\UniqueConstraint(name="idAgence1", columns={"idAgence1", "IdClient"})}, indexes={@ORM\Index(name="client_ibfk_2", columns={"IdClient"}), @ORM\Index(name="agence_ibfk_2", columns={"idAgence1"})})
 * @ORM\Entity
 */
class Client {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Agence
     *
     * @ORM\ManyToOne(targetEntity="Agence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAgence1", referencedColumnName="id")
     * })
     */
    private $idagence1;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdClient", referencedColumnName="id")
     * })
     */
    private $idclient;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set idagence1
     *
     * @param \Pidev\ReaBundle\Entity\Agence $idagence1
     * @return Client
     */
    public function setIdagence1(\Pidev\ReaBundle\Entity\Agence $idagence1 = null) {
        $this->idagence1 = $idagence1;

        return $this;
    }

    /**
     * Get idagence1
     *
     * @return \Pidev\ReaBundle\Entity\Agence 
     */
    public function getIdagence1() {
        return $this->idagence1;
    }

    /**
     * Set idclient
     *
     * @param \Pidev\ReaBundle\Entity\Utilisateur $idclient
     * @return Client
     */
    public function setIdclient(\Pidev\ReaBundle\Entity\Utilisateur $idclient = null) {
        $this->idclient = $idclient;

        return $this;
    }

    /**
     * Get idclient
     *
     * @return \Pidev\ReaBundle\Entity\Utilisateur 
     */
    public function getIdclient() {
        return $this->idclient;
    }

    public function __toString() {
        try {
            return (string) $this->idclient;
        } catch (Exception $exception) {
            return '';
        }
    }

}
