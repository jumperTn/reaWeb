<?php
namespace Pidev\ReaBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class RecherchercheType extends AbstractType {
    public function buildForm(FormBuilderInterface 
            $builder,array $options){
        $builder 
                ->add('description')
                ->add('Valider','submit');
            }
            public function getName(){
       // return 'Modele';
    }
}


