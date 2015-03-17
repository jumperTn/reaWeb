<?php

namespace Pidev\ReaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OffreType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('adresse')
            ->add('etatbien')
            ->add('prix')
            ->add('typeoperation')
            ->add('etat')
            ->add('surface')
            ->add('description')
            ->add('typeusage')
            ->add('type')
            ->add('x')
            ->add('y')
            ->add('idzone')
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
            'data_class' => 'Pidev\ReaBundle\Entity\Offre'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pidev_reabundle_offre';
    }
}
