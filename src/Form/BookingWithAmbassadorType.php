<?php

namespace App\Form;

use App\Entity\BookingWithAmbassador;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookingWithAmbassadorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('civilNumber')
            ->add('name')
            ->add('email')
            ->add('phone')
            ->add('date')
            ->add('reason')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => BookingWithAmbassador::class,
        ]);
    }
}
