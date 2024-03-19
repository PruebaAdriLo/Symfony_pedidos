<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Entity\Categorias;

class CategoriasFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        //Se copia por cada fila de datos introducidos
        $categoria1 = new Categorias();  
        $categoria1->setnombre('Comida'); 
        $categoria1->setdescripcion('Platos e ingredientes'); 
        $manager->persist($categoria1); 

        $categoria2 = new Categorias();  
        $categoria2->setnombre('Bedidas sin'); 
        $categoria2->setdescripcion('Bebidas sin alcohol'); 
        $manager->persist($categoria2); 

        $categoria3 = new Categorias();  
        $categoria3->setnombre('Bebidas con'); 
        $categoria3->setdescripcion('Bebidas con alcohol'); 
        $manager->persist($categoria3); 

        //Solo una vez
        $manager->flush();

        //Mandar dato después de subir a BBDD para poder seguir usandolo en otra tabla y poder accede como en productos
        $this->addReference('categoria1', $categoria1);
        $this->addReference('categoria2', $categoria2);
        $this->addReference('categoria3', $categoria3);
    }
}
