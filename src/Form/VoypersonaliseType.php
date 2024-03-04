<?php

namespace App\Form;

use App\Entity\Voypersonalise;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VoypersonaliseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('destination')
            ->add('saison')
            ->add('date')
            ->add('email')
            ->add('act')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Voypersonalise::class,
        ]);
    }
}
