<?php

namespace App\Form;

use App\Entity\Pedidos;
use App\Entity\Restaurantes;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

//Tipos de los campos del formulario
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PedidoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $textInputCss = 'block w-full px-4 py-2 mt-1 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring.indigo-500 focus:border-indigo-500 sm:text-sm';
        $builder
            ->add('fecha', DateTimeType::class, [
                'label' => 'Fecha',
                'widget' => 'single_text',
                'required' => false,
                'attr' => [
                    'class' => $textInputCss,
                ],
            ])
            ->add('enviado', ChoiceType::class, [
                'label' => 'Enviado',
                'required' => false,
                'attr' => [
                    'class' => $textInputCss,
                ],
                'choices' => [
                    'Sí' => 'si',
                    'No' => 'no',
                ],
            ])
            ->add('restaurante', EntityType::class, [ 
                'class' => 'App\Entity\Restaurantes',
                'label' => 'Restaurante',
                'attr' => [
                    'class' => 'block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-3',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pedidos::class,
        ]);
    }
}
