<?php

namespace NeigeEtSoleilBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ContratLType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dateDebutCL', DateType::class, array('label' => 'Date de début'))
                ->add('dateFinCL', DateType::class, array('label' => 'Date de fin'))
                ->add('dateSignatureCL', DateType::class, array('label' => 'Date de confirmation'))
                ->add('tiers')
                ->add('appartements')
                ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NeigeEtSoleilBundle\Entity\ContratL'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'neigeetsoleilbundle_contratl';
    }


}
