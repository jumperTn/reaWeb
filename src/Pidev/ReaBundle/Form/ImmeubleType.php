<?php

namespace Pidev\ReaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ImmeubleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nbretage')
            ->add('nbrappartement')
            ->add('idoffre')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pidev\ReaBundle\Entity\Immeuble'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pidev_reabundle_immeuble';
    }
}
