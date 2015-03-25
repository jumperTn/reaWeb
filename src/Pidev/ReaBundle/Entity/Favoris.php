<?php

namespace Pidev\ReaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Favoris
 *
 * @ORM\Table(name="favoris", uniqueConstraints={@ORM\UniqueConstraint(name="idUtilisateur_2", columns={"idUtilisateur", "idOffre"})}, indexes={@ORM\Index(name="idOffre", columns={"idOffre"}), @ORM\Index(name="idUtilisateur", columns={"idUtilisateur"})})
 * @ORM\Entity(repositoryClass="Pidev\ReaBundle\Entity\StatRepository")
 */
class Favoris
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
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUtilisateur", referencedColumnName="id")
     * })
     */
    private $idutilisateur;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idOffre", referencedColumnName="id")
     * })
     */
    private $idoffre;



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
     * Set idutilisateur
     *
     * @param \Pidev\ReaBundle\Entity\Utilisateur $idutilisateur
     * @return Favoris
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

    /**
     * Set idoffre
     *
     * @param \Pidev\ReaBundle\Entity\Offre $idoffre
     * @return Favoris
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
}
