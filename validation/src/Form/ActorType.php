<?php

namespace App\Form;

use App\Entity\Actor;
use App\Validator\Gender;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('first_name')
            ->add('last_name')
            ->add('birthday', BirthdayType::class, [
                'years' => range(date('Y') - 100, date('Y')),
                'data' => new \DateTime(),
            ])
            ->add('gender', ChoiceType::class, [
                'choices' => [
                    'Male' => 'm',
                    'Female' => 'f',
                    'Other' => 'o',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Actor::class,
        ]);
    }
}
