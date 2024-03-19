<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use Doctrine\ORM\EntityManagerInterface; //EntityManagerInterface

//Obtener datos
use App\Entity\Productos;                 //Entidad

//Formularios
use App\Form\ProductoType;
use Symfony\Component\HttpFoundation\Request;

class ProductosController extends AbstractController
{
    //Constructor
    public function __construct(private readonly EntityManagerInterface $entityManager) //readonly - Solo de lectura
    {

    }

    //Ver todos
    #[Route('/productos', name: 'app_productos', methods: ['GET', 'HEAD'])]
    public function index(): Response
    {
        $productos = $this->entityManager->getRepository(Productos::class)->findAll();  
        return $this->render('productos/index.html.twig', [
            'productos' => $productos, 
        ]);
    }

    //Crear categoría
    #[Route('/producto/create', name: 'app_producto_create', methods: ['GET','POST'])]
    public function create(Request $request): Response{ //Mostrar y procesar el formulario
        $productos = new Productos();       //Nueva instancia de la entidad productos
        $form = $this->createForm(ProductoType::class, $productos);  //Crear formulario
    
        $form->handleRequest($request);  //Formulario maneje la petición pasandole el $request
    
        if($form->isSubmitted() && $form->isValid()){  //Si es tá pulsado el botón de enviar formulario y si es válido
            $this->entityManager->persist($productos);  //Persiste la categoría
            $this->entityManager->flush();          //Guarda en la base de datos
    
            return $this->redirectToRoute('app_producto', ['id' => $productos->getId()]);
        }
    
        //Pasamos el formulario $form
        return $this->render('productos/create.html.twig', [
            'form' => $form->createView(),                  //Para que se vea
        ]);
    }

    //Mostrar 1 columnaEntidad
    #[Route('/producto/{id}', name: 'app_producto', methods: ['GET'])]
    public function show(int $id): Response{
    
        $producto = $this->entityManager->getRepository(Productos::class)->find($id);
    
        if(!$producto){
            throw $this->createNotFoundException('No se ha encontrado el producto');
        }
    
        return $this->render('productos/show.html.twig', [
            'producto' => $producto,   
        ]);
    }

    // Actualizar
    #[Route('/producto/{id}/edit', name: 'app_producto_edit', methods: ['GET','POST'])]
    public function edit(int $id, Request $request): Response{
    
        $producto = $this->entityManager->getRepository(Productos::class)->find($id);
    
        if(!$producto){
            throw $this->createNotFoundException('No se ha encontrado el elemento');
        }
    
        $form = $this->createForm(ProductoType::class, $producto);  
    
        $form->handleRequest($request);  
    
        if($form->isSubmitted() && $form->isValid()){
            $this->entityManager->flush();          
    
            return $this->redirectToRoute('app_productos');
        }
    
        return $this->render('productos/edit.html.twig', [  
            'form' => $form->createView(),
            'producto' => $producto,                  
        ]);
    }

    // Borrar No seguro
    #[Route('/producto/{id}/delete', name: 'app_producto_delete', methods: ['GET'])]
    public function delete(int $id): Response{
        $producto = $this->entityManager->getRepository(Productos::class)->find($id);

        if(!$producto){
            throw $this->createNotFoundException('No se ha encontrado el prodcuto');
        }

        $this->entityManager->remove($producto);
        $this->entityManager->flush();

        return $this->redirectToRoute('app_productos');
    }

    // Borrar Seguro
    #[Route('/producto/{id}/deleteSeguro', name: 'app_producto_deleteSeguro', methods: ['POST'])]
    public function deleteSeguro(int $id, Request $request): Response{
        //Validar la petición
        $submittedToken = $request->request->get('valorToken');

        //dd($submittedToken); //Se ve el token

        //Asegurar que es válido
        if(! $this->isCsrfTokenValid('delete-productoSeguro', $submittedToken)){ //Si este token no es válido (nombre del toke = delete-nombreBorrarSeguro y valor del token
                                                                            //(valorToken) = $submittedToken)
            return $this->redirectToRoute('app_productos');
        }

        $producto = $this->entityManager->getRepository(Productos::class)->find($id);

        if(!$producto){
            throw $this->createNotFoundException('No se ha encontrado el producto');
        }

        $this->entityManager->remove($producto);
        $this->entityManager->flush();

        return $this->redirectToRoute('app_productos');
    }
}
