<?php

namespace App\Form;

use App\Entity\Voyage;
use App\Entity\Programme;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class ProgrammeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('activite', ChoiceType::class, [
                'choices' => [
                    'sortie en bateau ' => 'sortie en bateau ',
                    'viste des monuments' => 'viste des monuments',
                    'sky' => 'sky',
                   
                    // Ajoutez d'autres options selon vos besoins
                ],
                'placeholder' => 'Choisissez une activité',
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez choisir une activité']),
                ],
            ])
            ->add('datedepart', DateTimeType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer une date de départ']),
                    new GreaterThanOrEqual([
                        'value' => new \DateTime(),
                        'message' => 'La date de départ doit être ultérieure ou égale à aujourd\'hui',
                    ]),
                ],
            ])
            ->add('dateretour', DateTimeType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer une date de retour']),
                        new GreaterThanOrEqual([
                            'value' => '+1 day', // La date de départ + 1 jour
                            'message' => 'La date de retour doit être au moins un jour après la date de départ',
                        ]),
                ],
            ])
            ->add('description', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer une description']),
                    new Regex([
                        'pattern' => '/^[a-zA-Z\s]+$/',
                        'message' => 'La description ne doit contenir que des lettres et des espaces',
                    ]),
                ],
            ])
            ->add('voyage', EntityType::class, [
                'class' => Voyage::class,
                'choice_label' => 'destination', // Affiche la destination du voyage
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez choisir un voyage']),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Programme::class,
        ]);
    }


}
