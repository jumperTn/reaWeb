<?php

namespace Pidev\ReaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ban
 *
 * @ORM\Table(name="ban", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="ban_ibfk_2", columns={"idAgence"}), @ORM\Index(name="user_ibfk_2", columns={"idUtilisateur"})})
 * @ORM\Entity
 */
class Ban
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
     * @var \Agence
     *
     * @ORM\ManyToOne(targetEntity="Agence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAgence", referencedColumnName="id")
     * })
     */
    private $idagence;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUtilisateur", referencedColumnName="id")
     * })
     */
    private $idutilisateur;



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
     * Set idagence
     *
     * @param \Pidev\ReaBundle\Entity\Agence $idagence
     * @return Ban
     */
    public function setIdagence(\Pidev\ReaBundle\Entity\Agence $idagence = null)
    {
        $this->idagence = $idagence;

        return $this;
    }

    /**
     * Get idagence
     *
     * @return \Pidev\ReaBundle\Entity\Agence 
     */
    public function getIdagence()
    {
        return $this->idagence;
    }

    /**
     * Set idutilisateur
     *
     * @param \Pidev\ReaBundle\Entity\Utilisateur $idutilisateur
     * @return Ban
     */
    public function setIdutilisateur(\Pidev\ReaBundle\Entity\Utilisateur $idutilisateur = null)
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    /**
     * Get idutilisateur
     *
     * @return \Pidev\ReaBundle\Entity\Utilisateur 
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }
}
