<?php 
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SearchType as SymfonySearchType; // Pas besoin d'alias ici, car nous n'utilisons pas votre classe personnalisée SearchType dans cette ligne

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('search', SymfonySearchType::class, [
                'label' => 'Recherche',
                'required' => false,
            ]);
            // Vous pouvez ajouter d'autres champs selon les besoins de votre recherche
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configurez ici les options par défaut si nécessaire
        ]);
    }
}