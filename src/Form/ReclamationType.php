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
                'attr' => ['maxlength' => 255],
            ])
            ->add('prenom', TextType::class, [
                'attr' => ['maxlength' => 255],
            ])
            ->add('email', EmailType::class)
            ->add('tel', IntegerType::class, [
                'attr' => ['min' => 0, 'max' => 8],
            ])
            ->add('etat', ChoiceType::class, [
                'choices' => [
                    'Service' => 'option1',
                    ' Produit' => 'option2',
                    'Commande' => 'option3',
                ],
            ])
            ->add('description', TextareaType::class, [
                'attr' => ['maxlength' => 255],
            ])
            ->add('dateReclamation', DateType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
