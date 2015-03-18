<?php

namespace Pidev\ReaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RendezvousType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('daterendezvous')
            ->add('idoffre')
            ->add('idagent')
            ->add('idclient1')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pidev\ReaBundle\Entity\Rendezvous'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pidev_reabundle_rendezvous';
    }
}
