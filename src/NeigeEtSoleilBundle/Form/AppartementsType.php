<?php

namespace NeigeEtSoleilBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;

class AppartementsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomImmeubleA', TextType::class, array('label'=>'Nom de l\'immeuble'))
                ->add('typeAppartement')
                ->add('adresse')
                ->add('villeA', TextType::class, array('label'=>'Ville'))
                ->add('cpA', IntegerType::class, array('label'=>'Code Postal'))
                ->add('superficie', IntegerType::class, array('label'=>'Superficie (en m²)'))
                ->add('prix', MoneyType::class, array('label'=>'Prix par nuit'))
                ->add('description')
                ->add('image', TextType::class, array('label'=>'Chemin de l\'image', 'required' => false))
                ->add('disponible')
                ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NeigeEtSoleilBundle\Entity\Appartements'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'neigeetsoleilbundle_appartements';
    }


}
