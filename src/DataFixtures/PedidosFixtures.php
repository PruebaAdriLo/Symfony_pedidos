<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

//Entidad/Tabla
use App\Entity\Pedidos;

//Para que coja Restaurante antes de Pedidos,sino da error al no existir
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

//Para que coja Restaurante antes de Pedidos,sino da error al no existir
// class PedidoFixtures extends Fixture
class PedidosFixtures extends Fixture implements DependentFixtureInterface
{
    public function getDependencies()
    {
        return [
            RestaurantesFixtures::class,
        ];
    }
    public function load(ObjectManager $manager): void
    {
        //Se copia por cada fila de datos introducidos
        $pedido1 = new Pedidos();  
        $pedido1->setFecha(new \DateTime('2019-02-07 17:37:52'));
        $pedido1->setEnviado('no');
        $pedido1->setRestaurante($this->getReference('restaurante1'));
        $manager->persist($pedido1);

        //Se copia por cada fila de datos introducidos
        $pedido2 = new Pedidos();  
        $pedido2->setFecha(new \DateTime('2023-05-01 10:05:01'));
        $pedido2->setEnviado('si');
        $pedido2->setRestaurante($this->getReference('restaurante2'));
        $manager->persist($pedido2);

        //Se copia por cada fila de datos introducidos
        $pedido3 = new Pedidos();  
        $pedido3->setFecha(new \DateTime('2024-02-28 18:10:52'));
        $pedido3->setEnviado('no');
        $pedido3->setRestaurante($this->getReference('restaurante3'));
        $manager->persist($pedido3);

        //Solo una vez
        $manager->flush();

        //Mandar dato después de subir a BBDD para poder seguir usandolo en otra tabla y poder accede como en productos
        $this->addReference('pedido1', $pedido1);
        $this->addReference('pedido2', $pedido2);
        $this->addReference('pedido3', $pedido3);
    }
}
