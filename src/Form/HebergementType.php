<?php

namespace App\Form;

use App\Form\DataTransformer\ArrayToJsonTransformer;
use App\Entity\Hebergement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class HebergementType extends AbstractType
{
    private $transformer;

    // Le constructeur accepte votre DataTransformer en tant que dépendance
    public function __construct(ArrayToJsonTransformer $transformer)
    {
        $this->transformer = $transformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('adresse')
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Hotel' => 'Hotel',
                    'AirBnb' => 'AirBnb',
                    'Maison d hôte' => 'Maison d hôte',
                    // Ajoutez d'autres types d'hébergement si nécessaire
                ],
            ])
            ->add('prix')
            ->add('maxguest')
            ->add('room')
            ->add('description')
            ->add('amenities', ChoiceType::class, [
                'choices' => [
                    'Wi-Fi' => 'wifi',
                    'Piscine' => 'piscine',
                    'Parking' => 'parking',
                    // Ajoutez d'autres commodités selon vos besoins
                ],
                'expanded' => true, // Rend les choix comme des checkboxes pour une sélection multiple
                'multiple' => true, // Permet la sélection multiple
            ])
            ->add('image',FileType::class, [
                'label' => 'image du logement',

                'mapped' => true, //maneha maandi attribut esmo photo fl entity mte3na
                'required' => false,
                'attr'=>[
                    'placeholder' => 'Select a file',
                    'style' => 'color:white;height:65px;background-color:#22152c;width:100%;border: none;margin:0px 0px 10px;padding:24px 33px'

                ]
            ])
        ;
         // Appliquez le transformer au champ 'amenities'
        //$builder->get('amenities')->addModelTransformer($this->transformer);
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hebergement::class,
        ]);
    }
}
