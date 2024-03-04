<?php

namespace App\Form;

use App\Entity\Guide;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GuideType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class, [
            'constraints' => [
                new Assert\NotBlank(['message' => 'Le nom ne peut pas être vide.']),
                new Assert\Length([
                    'min' => 3,
                    'max' => 255,
                    'minMessage' => 'Le nom doit dépasser {{ limit }} caractères.',
                    'maxMessage' => 'Le nom ne peut pas dépasser {{ limit }} caractères.',
                ]),
            ],
        ])
        ->add('prenom', TextType::class, [
            'constraints' => [
                new Assert\NotBlank(['message' => 'Le prénom ne peut pas être vide.']),
                new Assert\Length([
                    'min' => 3,
                    'max' => 255,
                    'minMessage' => 'Le prénom doit dépasser {{ limit }} caractères.',
                    'maxMessage' => 'Le prénom ne peut pas dépasser {{ limit }} caractères.',
                ]),
            ],
        ])
        ->add('num_tel', TelType::class, [
            'constraints' => [
                new Assert\NotBlank(['message' => 'Le numéro de téléphone ne peut pas être vide.']),
                new Assert\Length([
                    'min' => 8,
                    'max' => 8,
                    'maxMessage' => 'Le numéro de téléphone doit etre  {{ limit }} caractères!!',
                ]),
                
            ],
        ])
            ->add('disponibilite')
            ->add('image', FileType::class, [
                'label' => 'Image',
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le numéro de téléphone ne peut pas être vide.']),
                    new \Symfony\Component\Validator\Constraints\File([
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image',
                    ])
                ],
            ])
            ->add('save',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Guide::class,
        ]);
    }
}
