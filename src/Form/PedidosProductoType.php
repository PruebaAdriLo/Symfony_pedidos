<?php

namespace App\Form;

use App\Entity\Pedidos;
use App\Entity\PedidosProductos;
use App\Entity\Productos;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

//Tipos de los campos del formulario
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType; //año-mes-dia hora-min-seg

class PedidosProductoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $textInputCss = 'block w-full px-4 py-2 mt-1 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring.indigo-500 focus:border-indigo-500 sm:text-sm';
        $builder
            ->add('unidades', IntegerType::class, [
                'label' => 'Unidades',
                'attr' => [
                    'class' => $textInputCss,
                ],
            ])
            ->add('productos', EntityType::class, [ 
                'class' => 'App\Entity\Productos',
                'label' => 'Productos',
                'attr' => [
                    'class' => 'block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-3',
                ],
            ])
            ->add('pedido', EntityType::class, [ 
                'class' => 'App\Entity\Pedidos',
                'label' => 'Pedido',
                'attr' => [
                    'class' => 'block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-3',
                ],
                // 'disabled' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PedidosProductos::class,
        ]);
    }

}
