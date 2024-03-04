<?php

namespace App\Form;

use App\Entity\Avis;
use App\Entity\user;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; // Importation correcte pour la classe EntityType de Symfony
use App\Form\Type\StarRatingType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AvisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('commentaire')
            ->add('rating',StarRatingType::class)
            ->add('user', EntityType::class, [
                'class' => user::class,
                'choice_label' => 'id',
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Avis::class,
        ]);
    }
}