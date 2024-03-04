<?php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StarRatingType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'choices' => [
                5 => 5,
                4 => 4,
                3 => 3,
                2 => 2,
                1 => 1,
            ],
            'expanded' => true, // Pour afficher les boutons radio
            'multiple' => false, // Pour ne permettre qu'une seule sélection
        ]);
    }

    public function getParent(): string
    {
        return ChoiceType::class; // Hérite du type de champ ChoiceType
    }
}
