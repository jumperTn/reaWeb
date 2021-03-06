<?php

namespace Proxies\__CG__\Pidev\ReaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Rendezvous extends \Pidev\ReaBundle\Entity\Rendezvous implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Rendezvous' . "\0" . 'id', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Rendezvous' . "\0" . 'daterendezvous', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Rendezvous' . "\0" . 'idoffre', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Rendezvous' . "\0" . 'idagent', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Rendezvous' . "\0" . 'idclient1');
        }

        return array('__isInitialized__', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Rendezvous' . "\0" . 'id', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Rendezvous' . "\0" . 'daterendezvous', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Rendezvous' . "\0" . 'idoffre', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Rendezvous' . "\0" . 'idagent', '' . "\0" . 'Pidev\\ReaBundle\\Entity\\Rendezvous' . "\0" . 'idclient1');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Rendezvous $proxy) {
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
    public function setDaterendezvous($daterendezvous)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDaterendezvous', array($daterendezvous));

        return parent::setDaterendezvous($daterendezvous);
    }

    /**
     * {@inheritDoc}
     */
    public function getDaterendezvous()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDaterendezvous', array());

        return parent::getDaterendezvous();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdoffre(\Pidev\ReaBundle\Entity\Offre $idoffre = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdoffre', array($idoffre));

        return parent::setIdoffre($idoffre);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdoffre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdoffre', array());

        return parent::getIdoffre();
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

}
