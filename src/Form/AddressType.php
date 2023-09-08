<?php

namespace App\Form;

use App\Entity\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => "Nom de l'adresse",
            ])
            ->add('firstname', TextType::class, [
                'label' => "Prénom",
            ])
            ->add('lastname', TextType::class, [
                'label' => "Nom",
            ])
            ->add('company', TextType::class, [
                'label' => "Société",
                'required' => false,
            ])
            ->add('address', TextType::class, [
                'label' => "Adresse",
            ])
            ->add('postal', TextType::class, [
                'label' => "Code postal",
            ])
            ->add('city', TextType::class, [
                'label' => "Ville",
            ])
            ->add('country', CountryType::class, [
                'label' => "Pays",
                'attr' => [
                    'class' => 'country'
                ]
            ])
            ->add('phone', TelType::class, [
                'label' => "Téléphone",
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Valider mon adresse',
                'attr' => [
                    'class' => 'btn btn-main'
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
