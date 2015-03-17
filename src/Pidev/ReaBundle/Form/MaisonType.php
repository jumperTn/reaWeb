<?php

namespace Pidev\ReaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MaisonType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nbrchambre')
            ->add('nbrsalledebain')
            ->add('nbrcuisine')
            ->add('nbrsallon')
            ->add('nbrsuite')
            ->add('nbretage')
            ->add('surfacehabitale')
            ->add('terrasse')
            ->add('picine')
            ->add('garage')
            ->add('balcon')
            ->add('meuble')
            ->add('chauffage')
            ->add('climatisation')
            ->add('parking')
            ->add('idoffre')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pidev\ReaBundle\Entity\Maison'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pidev_reabundle_maison';
    }
}
