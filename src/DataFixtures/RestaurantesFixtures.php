<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Restaurantes;

class RestaurantesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        //Se copia por cada fila de datos introducidos
        $restaurante1 = new Restaurantes();  
        $restaurante1->setCorreo('madrid1@empresa.com');
        $restaurante1->setClave('1234');
        $restaurante1->setPais('España');
        $restaurante1->setCP(28002);
        $restaurante1->setCiudad('Madrid');
        $restaurante1->setDireccion('C/ Padre  Claret, 8');
        $restaurante1->setRol(1);
        $manager->persist($restaurante1);

        $restaurante2 = new Restaurantes();  
        $restaurante2->setCorreo('cadiz1@empresa.com');
        $restaurante2->setClave('1234');
        $restaurante2->setPais('España');
        $restaurante2->setCP(11001);
        $restaurante2->setCiudad('Cádiz');
        $restaurante2->setDireccion('C/ Portales, 2');
        $restaurante2->setRol(0);
        $manager->persist($restaurante2);

        $restaurante3 = new Restaurantes();  
        $restaurante3->setCorreo('x');
        $restaurante3->setClave('x');
        $restaurante3->setPais('España');
        $restaurante3->setCP(29603);
        $restaurante3->setCiudad('Marbella');
        $restaurante3->setDireccion('C/ Bartolo');
        $restaurante3->setRol(0);
        $manager->persist($restaurante3);

        //Solo una vez
        $manager->flush();

        //Mandar dato después de subir a BBDD para poder seguir usandolo en otra tabla y poder accede como en restaurantes
        $this->addReference('restaurante1', $restaurante1);
        $this->addReference('restaurante2', $restaurante2);
        $this->addReference('restaurante3', $restaurante3);
    }
}
