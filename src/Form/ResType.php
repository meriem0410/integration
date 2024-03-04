<?php

namespace App\Form;

use App\Entity\Res;
use App\Entity\User;
use App\Entity\Voyage;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('mail')
        ->add('nombre')
        ->add('origine')
        ->add('age')
        ->add('pays', EntityType::class, [
            'class' => Voyage::class,
            'choice_label' => 'destination',
        ])
        ->add('user', EntityType::class, [
            'class' => User::class,
            'choice_label' => 'username',
        ]);
       
}
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Res::class,
        ]);
    }
}
