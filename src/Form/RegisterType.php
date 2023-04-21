<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Rollerworks\Component\PasswordStrength\Validator\Constraints\PasswordStrength;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Prénom',
                'constraints' => new Length([
                    'min' => '2',
                    'max' => '30',
                ]),
                'attr' => [
                    'placeholder' => 'ex: Lucie'
                ]
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Nom',
                'constraints' => new Length([
                    'min' => '2',
                    'max' => '30',
                ]),
                'attr' => [
                    'placeholder' => 'ex: Lonchamp'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'constraints' => new Length([
                    'min' => '2',
                    'max' => '50',
                ]),
                'attr' => [
                    'placeholder' => 'ex: lucie.lonchamp@gmail.com'
                ]
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe sont différents',                
                'required' => true,
                'first_options' => [
                    'label' => 'Mot de passe',
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Merci de renseigner votre mot de passe',
                        ]),
                        new PasswordStrength([
                            'minLength' => 8,
                            'tooShortMessage' => 'Le mot de passe doit contenir au moins {{length}} caractères.',
                            'minStrength' => 4,
                            'message' => 'Le mot de passe doit contenir au moins une lettre minuscule, une lettre majuscule, un chiffre et un caractère spécial.'
                        ])
                    ],
                ],
                'second_options' => [
                    'label' => 'Confirmation de mot de passe',
                    'mapped' => false,
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Merci de confirmer le mot de passe',
                        ])
                    ]
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => "S'inscrire"
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
