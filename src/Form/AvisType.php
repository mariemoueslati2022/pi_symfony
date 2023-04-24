<?php

namespace App\Form;

use App\Entity\Avis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AvisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Rating input with choices ranging from 1 to 5
            ->add('rating', ChoiceType::class, [
                'choices' => [
                    '1 star' => 1,
                    '2 stars' => 2,
                    '3 stars' => 3,
                    '4 stars' => 4,
                    '5 stars' => 5,
                ],
                'label' => 'Rating',
                'required' => true,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            // Comment input with a textarea
            ->add('commentaire', TextareaType::class, [
                'label' => 'Comment',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 5
                ]
            ])
            // Title input with a text field
            ->add('titre', TextType::class, [
                'label' => 'Title',
                'required' => true,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Avis::class,
        ]);
    }
}
