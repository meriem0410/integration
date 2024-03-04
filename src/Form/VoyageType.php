<?php

namespace App\Form;

use App\Entity\Voyage;
use App\Entity\Programme;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;



class VoyageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('destination', TextType::class, [
            'constraints' => [
                new Assert\NotBlank(['message' => 'Veuillez entrer une destination']),
                new Assert\Regex([
                    'pattern' => '/^[a-zA-Z0-9\s]+$/',
                    'message' => 'La destination ne doit contenir que des lettres, des chiffres et des espaces',
                ]),
                new Assert\Length([
                    'max' => 255,
                    'maxMessage' => 'La destination ne doit pas dépasser {{ limit }} caractères',
                ]),
            ],
        ])
            ->add('prix', NumberType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer un prix']),
                    new Positive(['message' => 'Le prix doit être un nombre positif']),
                ],
            ])
            ->add('date', DateTimeType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer une date']),
                    new GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date doit être ultérieure à aujourd\'hui',
                    ]),
                ],
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'voyage organisé' => 'organisé',
                    'voyage simple' => 'simple',
                   
                    // Ajoutez d'autres options selon vos besoins
                ],
                'placeholder' => 'Choisissez un type', // Optionnel : Ajoutez un libellé de sélecteur par défaut
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez choisir un type']),
                ],
            ]);
            
        }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Voyage::class,
        ]);
    }
}

