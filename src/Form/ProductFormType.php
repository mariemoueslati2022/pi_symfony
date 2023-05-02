<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('name',TextType::class,[
            'label' => 'Product name',
            'mapped' => true,
            'required' => false,
            'attr' => ['placeholder' => 'Product name'],

        ])
        ->add('price',NumberType::class,[
            'label' => 'Product price',
            'mapped' => true,
            'required' => false,
            'attr' => ['placeholder' => 'Product price'],

        ])
        ->add('description',TextType::class,[
            'label' => 'Product description',
            'mapped' => true,
            'required' => false,
            'attr' => ['placeholder' => 'Product description'],
        ])
        ->add('category', ChoiceType::class, [
            'choices' => $options['categories'],
            'choice_label' => 'label',
            'choice_value' => 'id',
            'label' => 'Product category',

        ])
        ->add('img', FileType::class, [
            'label' => 'Product Image',
            'mapped' => false,
            'required' => false,
            'attr' => ['placeholder' => 'Product Image'],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
            'categories' => []
        ]);
    }
}
