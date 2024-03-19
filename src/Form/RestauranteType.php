<?php

namespace App\Form;

use App\Entity\Restaurantes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

//Tipos de los campos del formulario
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType; //Email
use Symfony\Component\Form\Extension\Core\Type\PasswordType; //Contraseña

class RestauranteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $textInputCss = 'block w-full px-4 py-2 mt-1 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring.indigo-500 focus:border-indigo-500 sm:text-sm';
        $builder
            ->add('Correo', EmailType::class, [
                'label' => 'Correo',
                'required' => false,                   //true, quitarlo o true sino va el validador de nulo
                'attr' => [
                    'class' => $textInputCss,
                ],
            ])
            ->add('clave', PasswordType::class, [
                'label' => 'Clave',
                'required' => false,                   //true, quitarlo o true sino va el validador de nulo
                'attr' => [
                    'class' => $textInputCss,
                ],
            ])
            ->add('pais', TextType::class, [
                'label' => 'País',
                'required' => false,                   //true, quitarlo o true sino va el validador de nulo
                'attr' => [
                    'class' => $textInputCss,
                ],
            ])
            ->add('cp', IntegerType::class, [
                'label' => 'CP',
                'required' => false,
                'attr' => [
                    'class' => $textInputCss,
                ],
            ])
            ->add('ciudad', TextType::class, [
                'label' => 'Ciudad',
                'required' => false,                   //true, quitarlo o true sino va el validador de nulo
                'attr' => [
                    'class' => $textInputCss,
                ],
            ])
            ->add('direccion', TextareaType::class, [
                'label' => 'Dirección',
                'required' => false,
                'attr' => [
                    'rows' => 3,
                    'class' => $textInputCss,
                ],
            ])
            ->add('rol', TextType::class, [
                'label' => 'Rol',
                'required' => false,                   //true, quitarlo o true sino va el validador de nulo
                'attr' => [
                    'class' => $textInputCss,
                ],
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Restaurantes::class,
        ]);
    }
}
