<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

//Entidad/Tabla
use App\Entity\Productos;

class ProductosFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        //Se copia por cada fila de datos introducidos
        $producto1 = new Productos();  
        $producto1->setNombre('Harina');
        $producto1->setDescripcion('8 paquetes de 1kg de harina cada uno');
        $producto1->setPeso(8);
        $producto1->setStock(94);
        $producto1->setCategoria($this->getReference('categoria1'));
        $manager->persist($producto1);

        $producto2 = new Productos();  
        $producto2->setNombre('Sal');
        $producto2->setDescripcion('20 paquetes de 1kg cada uno');
        $producto2->setPeso(20);
        $producto2->setStock(93);
        $producto2->setCategoria($this->getReference('categoria1'));
        $manager->persist($producto2);

        $producto3 = new Productos();  
        $producto3->setNombre('Agua 0.5');
        $producto3->setDescripcion('100 botellas de 0.5 litros cada una');
        $producto3->setPeso(51);
        $producto3->setStock(85);
        $producto3->setCategoria($this->getReference('categoria2'));
        $manager->persist($producto3);

        $producto4 = new Productos();  
        $producto4->setNombre('Agua 1.5');
        $producto4->setDescripcion('20 botellas de 1.5 litros cada una');
        $producto4->setPeso(31);
        $producto4->setStock(45);
        $producto4->setCategoria($this->getReference('categoria2'));
        $manager->persist($producto4);

        $producto5 = new Productos();  
        $producto5->setNombre('Cerveza Alhambra tercio');
        $producto5->setDescripcion('24 botellas de 33cl');
        $producto5->setPeso(10);
        $producto5->setStock(92);
        $producto5->setCategoria($this->getReference('categoria3'));
        $manager->persist($producto5);

        $producto6 = new Productos();  
        $producto6->setNombre('Vino tinto Rioja 0.75');
        $producto6->setDescripcion('6 botellas de 0.75');
        $producto6->setPeso(8);
        $producto6->setStock(94);
        $producto6->setCategoria($this->getReference('categoria3'));
        $manager->persist($producto6);

        //Solo una vez
        $manager->flush();

        //Mandar dato después de subir a BBDD para poder seguir usandolo en otra tabla y poder accede como en productos
        $this->addReference('producto1', $producto1);
        $this->addReference('producto2', $producto2);
        $this->addReference('producto3', $producto3);
        $this->addReference('producto4', $producto4);
        $this->addReference('producto5', $producto5);
        $this->addReference('producto6', $producto6);
    }
}
