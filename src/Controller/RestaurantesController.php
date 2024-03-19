<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface; //EntityManagerInterface
//Obtener datos
use App\Entity\Restaurantes;                 //Entidad

//Formularios
use App\Form\RestauranteType;
use Symfony\Component\HttpFoundation\Request;

class RestaurantesController extends AbstractController
{
    //Constructor
    public function __construct(private readonly EntityManagerInterface $entityManager) //readonly - Solo de lectura
    {

    }

    //Ver todos
    #[Route('/restaurantes', name: 'app_restaurantes', methods: ['GET', 'HEAD'])]
    public function index(): Response
    {
        //restaurantes obtiene todos los datos de Restaurantes
        $restaurantes = $this->entityManager->getRepository(Restaurantes::class)->findAll();  
    
        return $this->render('restaurantes/index.html.twig', [
            'restaurantes' => $restaurantes,
        ]);
    }

    //Crear categoría
    #[Route('/restaurante/create', name: 'app_restaurante_create', methods: ['GET','POST'])]
    public function create(Request $request): Response{
        $restaurantes = new Restaurantes();       
        $form = $this->createForm(RestauranteType::class, $restaurantes);  
    
        $form->handleRequest($request);  
    
        if($form->isSubmitted() && $form->isValid()){
            $this->entityManager->persist($restaurantes);  
            $this->entityManager->flush();         
    
            return $this->redirectToRoute('app_restaurante', ['id' => $restaurantes->getId()]);
        }
    
        //Pasamos el formulario $form
        return $this->render('restaurantes/create.html.twig', [
            'form' => $form->createView(),                  
        ]);
    }

    //Mostrar 1 columnaEntidad
    #[Route('/restaurante/{id}', name: 'app_restaurante', methods: ['GET'])]
    public function show(int $id): Response{
    
        $restaurantes = $this->entityManager->getRepository(Restaurantes::class)->find($id);
    
        if(!$restaurantes){
            throw $this->createNotFoundException('No se ha encontrado el restaurante');
        }
    
        return $this->render('restaurantes/show.html.twig', [
            'restaurantes' => $restaurantes,   
        ]);
    }

    // Actualizar
    #[Route('/restaurante/{id}/edit', name: 'app_restaurantes_edit', methods: ['GET','POST'])]
    public function edit(int $id, Request $request): Response{
    
        $restaurantes = $this->entityManager->getRepository(Restaurantes::class)->find($id);
    
        if(!$restaurantes){
            throw $this->createNotFoundException('No se ha encontrado el restaurante');
        }
    
        $form = $this->createForm(RestauranteType::class, $restaurantes);  
    
        $form->handleRequest($request);  
    
        if($form->isSubmitted() && $form->isValid()){
            $this->entityManager->flush();          
    
            return $this->redirectToRoute('app_restaurantes');
        }
    
        return $this->render('restaurantes/edit.html.twig', [  
            'form' => $form->createView(),
            'restaurantes' => $restaurantes,                   
        ]);
    }

    // Borrar No seguro
    #[Route('/restaurantes/{id}/delete', name: 'app_restaurantes_delete', methods: ['GET'])]
    public function delete(int $id): Response{
        $restaurantes = $this->entityManager->getRepository(Restaurantes::class)->find($id);
        
        if(!$restaurantes){
            throw $this->createNotFoundException('No se ha encontrado el restaurante');
        }
        
        $this->entityManager->remove($restaurantes);
        $this->entityManager->flush();
    
        return $this->redirectToRoute('app_restaurantes');
    }

    // Borrar Seguro
    #[Route('/restaurantes/{id}/deleteSeguro', name: 'app_restaurantes_deleteSeguro', methods: ['POST'])]
    public function deleteSeguro(int $id, Request $request): Response{
        //Validar la petición
        $submittedToken = $request->request->get('valorToken');

        //Asegurar que es válido
        if(! $this->isCsrfTokenValid('delete-restaurantesSeguro', $submittedToken)){
            return $this->redirectToRoute('app_restaurantes');
        }

        $restaurantes = $this->entityManager->getRepository(Restaurantes::class)->find($id);
        
        if(!$restaurantes){
            throw $this->createNotFoundException('No se ha encontrado el restaurante');
        }
        
        $this->entityManager->remove($restaurantes);
        $this->entityManager->flush();

        return $this->redirectToRoute('app_restaurantes');
    }
}
