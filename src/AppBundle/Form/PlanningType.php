<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PlanningType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder
        ->add('Semaine', IntegerType::class, [
          'attr' => [
           'min' =>1,
           'max' =>53
         ]
       ])
        ->add('jour', ChoiceType::class, [
            'choices' => [
                  'lundi' => 'lundi',
                  'mardi' => 'mardi',
                  'mercredi' => 'mercredi',
                  'jeudi' => 'jeudi',
                  'vendredi' => 'vendredi',
              ],
            ])
              ->add('demijournee', ChoiceType::class, [
                'choices'=> [
                  'matin' => 'matin',
                  'après-midi' => 'après-midi',
                ]
              ]);

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Planning'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_planning';
    }


}
