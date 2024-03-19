<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

//Entidad/Tabla
use App\Entity\PedidosProductos;

//Para que coja una tabla antes de otra,sino da error al no existir
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

// class PedidosProductosFixtures extends Fixture
class PedidosProductosFixtures extends Fixture implements DependentFixtureInterface
{
    public function getDependencies()
    {
        return [
            ProductosFixtures::class,
        ];
    }

    public function load(ObjectManager $manager): void
    {
        //Se copia por cada fila de datos introducidos
        $pedidoProducto1 = new PedidosProductos();  
        $pedidoProducto1->setUnidades(2);
        $pedidoProducto1->setProductos($this->getReference('producto1'));
        $pedidoProducto1->setPedido($this->getReference('pedido1'));
        $manager->persist($pedidoProducto1);

        $pedidoProducto2 = new PedidosProductos();  
        $pedidoProducto2->setUnidades(20);
        $pedidoProducto2->setProductos($this->getReference('producto3'));
        $pedidoProducto2->setPedido($this->getReference('pedido2'));
        $manager->persist($pedidoProducto2);

        $pedidoProducto3 = new PedidosProductos();  
        $pedidoProducto3->setUnidades(15);
        $pedidoProducto3->setProductos($this->getReference('producto2'));
        $pedidoProducto3->setPedido($this->getReference('pedido2'));
        $manager->persist($pedidoProducto3);

        //Solo una vez
        $manager->flush();

        //Mandar dato después de subir a BBDD para poder seguir usandolo en otra tabla y poder accede como en productos
        $this->addReference('pedidoProducto1', $pedidoProducto1);
        $this->addReference('pedidoProducto2', $pedidoProducto2);
        $this->addReference('pedidoProducto3', $pedidoProducto3);
    }
}
