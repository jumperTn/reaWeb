<?php

namespace Proxies\__CG__\Pidev\ReaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Offre extends \Pidev\ReaBundle\Entity\Offre implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'id', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'adresse', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'etatbien', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'prix', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'typeoperation', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'etat', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'surface', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'description', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'typeusage', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'type', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'x', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'y', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'idzone', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'idagent', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'idclient1');
        }

        return array('__isInitialized__', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'id', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'adresse', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'etatbien', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'prix', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'typeoperation', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'etat', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'surface', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'description', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'typeusage', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'type', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'x', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'y', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'idzone', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'idagent', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Offre' . "\0" . 'idclient1');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Offre $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', array($adresse));

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', array());

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtatbien($etatbien)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtatbien', array($etatbien));

        return parent::setEtatbien($etatbien);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtatbien()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtatbien', array());

        return parent::getEtatbien();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix($prix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', array($prix));

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', array());

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeoperation($typeoperation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeoperation', array($typeoperation));

        return parent::setTypeoperation($typeoperation);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeoperation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeoperation', array());

        return parent::getTypeoperation();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat($etat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', array($etat));

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', array());

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setSurface($surface)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSurface', array($surface));

        return parent::setSurface($surface);
    }

    /**
     * {@inheritDoc}
     */
    public function getSurface()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSurface', array());

        return parent::getSurface();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeusage($typeusage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeusage', array($typeusage));

        return parent::setTypeusage($typeusage);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeusage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeusage', array());

        return parent::getTypeusage();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', array($type));

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', array());

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setX($x)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setX', array($x));

        return parent::setX($x);
    }

    /**
     * {@inheritDoc}
     */
    public function getX()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getX', array());

        return parent::getX();
    }

    /**
     * {@inheritDoc}
     */
    public function setY($y)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setY', array($y));

        return parent::setY($y);
    }

    /**
     * {@inheritDoc}
     */
    public function getY()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getY', array());

        return parent::getY();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdzone(\Pidev\ReaBundle\Entity\Zone $idzone = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdzone', array($idzone));

        return parent::setIdzone($idzone);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdzone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdzone', array());

        return parent::getIdzone();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdagent(\Pidev\ReaBundle\Entity\Utilisateur $idagent = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdagent', array($idagent));

        return parent::setIdagent($idagent);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdagent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdagent', array());

        return parent::getIdagent();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdclient1(\Pidev\ReaBundle\Entity\Client $idclient1 = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdclient1', array($idclient1));

        return parent::setIdclient1($idclient1);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdclient1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdclient1', array());

        return parent::getIdclient1();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
