<?php

namespace Pidev\ReaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Agence
*
* @ORM\Table(name="agence")
* @ORM\Entity(repositoryClass="Pidev\ReaBundle\Entity\StatRepository")
*/
class Agence
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
     * @ORM\Column(name="nomAgance", type="string", length=20, nullable=false)
     */
    private $nomagance;

    /**
     * @var string
     *
     * @ORM\Column(name="Logo", type="string", length=400, nullable=false)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=200, nullable=false)
     */
    private $adresse;



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
     * Set nomagance
     *
     * @param string $nomagance
     * @return Agence
     */
    public function setNomagance($nomagance)
    {
        $this->nomagance = $nomagance;

        return $this;
    }

    /**
     * Get nomagance
     *
     * @return string 
     */
    public function getNomagance()
    {
        return $this->nomagance;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Agence
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Agence
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
         public function __toString()
{
try {
return (string) $this->nomagance;
} catch (Exception $exception) {
return '';
}
}
}
