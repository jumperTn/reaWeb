<?php

namespace Proxies\__CG__\Pidev\ReaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Zone extends \Pidev\ReaBundle\Entity\Zone implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Zone' . "\0" . 'id', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Zone' . "\0" . 'libelle', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Zone' . "\0" . 'education', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Zone' . "\0" . 'environement', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Zone' . "\0" . 'secoursetinterventionurgence', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Zone' . "\0" . 'sante', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Zone' . "\0" . 'loisirs', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Zone' . "\0" . 'securite', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Zone' . "\0" . 'transport', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Zone' . "\0" . 'eauxusees', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Zone' . "\0" . 'nbrvote');
        }

        return array('__isInitialized__', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Zone' . "\0" . 'id', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Zone' . "\0" . 'libelle', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Zone' . "\0" . 'education', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Zone' . "\0" . 'environement', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Zone' . "\0" . 'secoursetinterventionurgence', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Zone' . "\0" . 'sante', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Zone' . "\0" . 'loisirs', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Zone' . "\0" . 'securite', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Zone' . "\0" . 'transport', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Zone' . "\0" . 'eauxusees', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Zone' . "\0" . 'nbrvote');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Zone $proxy) {
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
    public function setLibelle($libelle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibelle', array($libelle));

        return parent::setLibelle($libelle);
    }

    /**
     * {@inheritDoc}
     */
    public function getLibelle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibelle', array());

        return parent::getLibelle();
    }

    /**
     * {@inheritDoc}
     */
    public function setEducation($education)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEducation', array($education));

        return parent::setEducation($education);
    }

    /**
     * {@inheritDoc}
     */
    public function getEducation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEducation', array());

        return parent::getEducation();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnvironement($environement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnvironement', array($environement));

        return parent::setEnvironement($environement);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnvironement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnvironement', array());

        return parent::getEnvironement();
    }

    /**
     * {@inheritDoc}
     */
    public function setSecoursetinterventionurgence($secoursetinterventionurgence)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSecoursetinterventionurgence', array($secoursetinterventionurgence));

        return parent::setSecoursetinterventionurgence($secoursetinterventionurgence);
    }

    /**
     * {@inheritDoc}
     */
    public function getSecoursetinterventionurgence()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSecoursetinterventionurgence', array());

        return parent::getSecoursetinterventionurgence();
    }

    /**
     * {@inheritDoc}
     */
    public function setSante($sante)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSante', array($sante));

        return parent::setSante($sante);
    }

    /**
     * {@inheritDoc}
     */
    public function getSante()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSante', array());

        return parent::getSante();
    }

    /**
     * {@inheritDoc}
     */
    public function setLoisirs($loisirs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoisirs', array($loisirs));

        return parent::setLoisirs($loisirs);
    }

    /**
     * {@inheritDoc}
     */
    public function getLoisirs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoisirs', array());

        return parent::getLoisirs();
    }

    /**
     * {@inheritDoc}
     */
    public function setSecurite($securite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSecurite', array($securite));

        return parent::setSecurite($securite);
    }

    /**
     * {@inheritDoc}
     */
    public function getSecurite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSecurite', array());

        return parent::getSecurite();
    }

    /**
     * {@inheritDoc}
     */
    public function setTransport($transport)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTransport', array($transport));

        return parent::setTransport($transport);
    }

    /**
     * {@inheritDoc}
     */
    public function getTransport()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTransport', array());

        return parent::getTransport();
    }

    /**
     * {@inheritDoc}
     */
    public function setEauxusees($eauxusees)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEauxusees', array($eauxusees));

        return parent::setEauxusees($eauxusees);
    }

    /**
     * {@inheritDoc}
     */
    public function getEauxusees()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEauxusees', array());

        return parent::getEauxusees();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbrvote($nbrvote)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbrvote', array($nbrvote));

        return parent::setNbrvote($nbrvote);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbrvote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbrvote', array());

        return parent::getNbrvote();
    }

}
