<?php

namespace App\Form;

use App\Entity\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom de l\'adresse',
                'attr' => [
                    'placeholder' => 'ex: Domicile'
                ]
            ])
            ->add('firstname', TextType::class, [
                'label' => 'Prénom'
            ])
            ->add('lastname', TextType::class, [
                'label' =>'Nom de famille'
            ])
            ->add('company', TextType::class, [
                'label' => 'Société (facultatif)',
                'required' => false,
            ])
            ->add('address', TextType::class, [
                'label' => 'Adresse postale',
                'attr' => [
                    'placeholder' => 'ex: 8 rue de Lasoif'
                ]
            ])
            ->add('postal', TextType::class, [
                'label' => 'Code postal'
            ])
            ->add('city', ChoiceType::class, [
                'label' => 'Ville',
                'choices' => [
                    'Ariana' => 'Ariana',
                    'Béja' => 'Béja',
                    'Ben Arous' => 'Ben Arous',
                    'Bizerte' => 'Bizerte',
                    'Gabès' => 'Gabès',
                    'Gafsa' => 'Gafsa',
                    'Jendouba' => 'Jendouba',
                    'Kairouan' => 'Kairouan',
                    'Kasserine' => 'Kasserine',
                    'Kébili' => 'Kébili',
                    'Kef' => 'Kef',
                    'Mahdia' => 'Mahdia',
                    'Manouba' => 'Manouba',
                    'Médenine' => 'Médenine',
                    'Monastir' => 'Monastir',
                    'Nabeul' => 'Nabeul',
                    'Sfax' => 'Sfax',
                    'Sidi Bouzid' => 'Sidi Bouzid',
                    'Siliana' => 'Siliana',
                    'Sousse' => 'Sousse',
                    'Tataouine' => 'Tataouine',
                    'Tozeur' => 'Tozeur',
                    'Tunis' => 'Tunis',
                    'Zaghouan' => 'Zaghouan',
                ],
                'placeholder' => 'Sélectionnez une ville', 
            ])
            
            ->add('phone', TelType::class, [
                'label' => 'Téléphone'
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Enregistrer adresse', 
                'attr' => [
                    'class' => 'btn btn-info btn-block mt-2'
                ]
                
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Address::class,
        ]);
    }
}
