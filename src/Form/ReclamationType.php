<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'attr' => [
                    'maxlength' => 255,
                    'required' => true,
                    'title' => 'Please enter your name',
                ],
            ])
            ->add('prenom', TextType::class, [
                'attr' => [
                    'maxlength' => 255,
                    'required' => true,
                    'title' => 'Please enter your surname',
                ],
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'required' => true,
                    'title' => 'Please enter a valid email address',
                ],
            ])
            ->add('tel', IntegerType::class, [
                'attr' => [
                    'min' => 0,
                    'max' => 99999999,
                    'required' => true,
                    'title' => 'Please enter a valid telephone number',
                ],
            ])
            ->add('etat', ChoiceType::class, [
                'choices' => [
                    'Service' => 'option1',
                    'Produit' => 'option2',
                    'Commande' => 'option3',
                ],
                'attr' => [
                    'required' => true,
                    'title' => 'Please select a category for your complaint',
                ],
            ])
            ->add('description', TextareaType::class, [
                'attr' => [
                    'maxlength' => 255,
                    'required' => true,
                    'title' => 'Please provide a description of your complaint',
                ],
            ])
            ->add('dateReclamation', DateType::class, [
                'attr' => [
                    'required' => true,
                    'title' => 'Please enter the date of your complaint',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
