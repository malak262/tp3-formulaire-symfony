<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                child: 'quantity',
                type: IntegerType::class,
                options: [
                    'required' => true,
                    'label' => 'Quantity',
                    'data' => 1,
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                        'class' => 'form-control',
                        'style' => 'max-width: 100px;'
                    ]
                ]
            )
            ->add(
                child: 'color',
                type: ChoiceType::class,
                options: [
                    'required' => true,
                    'label' => 'Select Color',
                    'choices' => [
                        'Matte Black' => 'black',
                        'Pearl White' => 'white',
                        'Silver' => 'silver'
                    ],
                    'attr' => [
                        'class' => 'form-select',
                        'style' => 'max-width: 200px;'
                    ]
                ]
            );
    }
}
