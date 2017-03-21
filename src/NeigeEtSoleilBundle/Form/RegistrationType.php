<?php
// src/NeigeEtSoleilBundle/Form/RegistrationType.php

namespace NeigeEtSoleilBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;




class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('roles', CollectionType::class, array(
                    'label' => 'Vous etes :',
                    'entry_type' => ChoiceType::class,
                    'entry_options' => array(
                        'label' => false,
                        'choices' => array(
                            'Locataire' => 'ROLE_USER',
                            'Proprietaire' => 'ROLE_PROPRIETAIRE'))))
                ->add('nom')
                ->add('prenom', TextType::class, array('label'=>'Prénom'))
                ->add('adresse')
                ->add('ville')
                ->add('cp', TextType::class, array('label'=>'Code Postal'))
                ->add('tel', TextType::class, array('label'=>'Numéro de Téléphone'))
                ->add('fonction', TextType::class, array('label'=>'Profession')) 
                ;
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}