<?php

namespace App\Form;

use App\Entity\Excursion;
use App\Entity\Guide;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ExcursionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('titre', null, [
            'constraints' => [
                new NotBlank([
                    'message' => 'Ce champ ne peut pas être vide.', // French error message for NotBlank constraint
                ]), 
                new Length([
                    'min' => 3,
                    'max' => 255,
                    'minMessage' => 'Le titre doit avoir au moins {{ limit }} caractères.', // French error message for minimum length
                    'maxMessage' => 'Le titre ne peut pas avoir plus de {{ limit }} caractères.', // French error message for maximum length
                ]), 
            ],
        ])
        ->add('description', null, [
            'constraints' => [
                new NotBlank([
                    'message' => 'Ce champ ne peut pas être vide.', // French error message for NotBlank constraint
                ]), 
                new Length([
                    'min' => 10,
                    'minMessage' => 'La description doit avoir au moins {{ limit }} caractères.', // French error message for minimum length
                ]), 
            ],
        ])
        ->add('ville', null, [
            'constraints' => [
                new NotBlank([
                    'message' => 'Ce champ ne peut pas être vide.', // French error message for NotBlank constraint
                ]),
                new Length([
                    'min' => 3,
                    'max' => 255,
                    'minMessage' => 'Le nom de la ville doit avoir au moins {{ limit }} caractères.', // French error message for minimum length
                    'maxMessage' => 'Le nom de la ville ne peut pas avoir plus de {{ limit }} caractères.', // French error message for maximum length
                ]),
            ],
        ])
        ->add('latitude')
        ->add('longitude')
            ->add('relation', EntityType::class, [
                'class' => Guide::class,
'choice_label' => 'nom',
            ])
             ->add('video', FileType::class, [
                'label' => 'Video',
                'required' => true,
                'mapped' => false, 
                'constraints' => [
                    new File([
                        'mimeTypes' => [
                            'video/mp4',
                            'video/mpeg',
                            'video/quicktime',
                            'video/x-msvideo',
                            'video/x-ms-wmv',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid video file (MP4, MPEG, QuickTime, AVI, WMV)',
                    ])
                ],
                ])
                ->add('save',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Excursion::class,
        ]);
    }
}
