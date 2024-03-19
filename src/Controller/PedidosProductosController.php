<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface; //EntityManagerInterface
//Obtener datos
use App\Entity\PedidosProductos;                 //Entidad
use App\Entity\Pedidos;                 //Entidad

//Formularios
use App\Form\PedidosProductoType;
use Symfony\Component\HttpFoundation\Request;

class PedidosProductosController extends AbstractController
{
    //Constructor
    public function __construct(private readonly EntityManagerInterface $entityManager) //readonly - Solo de lectura
    {

    }

    //Ver todos
    #[Route('/pedidosProductos', name: 'app_pedidosProductos', methods: ['GET', 'HEAD'])]
    public function index(): Response
    {
        //pedidosProductos obtiene todos los datos de pedidosProductos
        $pedidosProductos = $this->entityManager->getRepository(PedidosProductos::class)->findAll();  

        return $this->render('pedidos_productos/index.html.twig', [
            'pedidosProductos' => $pedidosProductos,
        ]);
    }

    //Crear 
    // #[Route('/pedidos_productos/create', name: 'app_pedidosProductos_create', methods: ['GET','POST'])] //Sin enlazar con Pedidos
    #[Route('/pedidos_productos/create/{pedidoId}', name: 'app_pedidosProductos_create', methods: ['GET','POST'])] //Enlazando con Pedidos
    public function create(Request $request, int $pedidoId): Response{ //Enlazando con Pedidos
    // public function create(Request $request): Response{ //Sin enlazar con Pedidos

        //Enlazar con Pedidos
        $pedido = $this->entityManager->getRepository(Pedidos::class)->find($pedidoId);

        if (!$pedido) {
            throw $this->createNotFoundException('No se ha encontrado el pedido');
        }

        $pedidosProductos = new PedidosProductos();       
        
        //Enlazar con PedidosProductos
        $pedidosProductos->setPedido($pedido);

        $form = $this->createForm(PedidosProductoType::class, $pedidosProductos);  
    
        $form->handleRequest($request);  
    
        if($form->isSubmitted() && $form->isValid()){
            $this->entityManager->persist($pedidosProductos);  
            $this->entityManager->flush();         
    
            return $this->redirectToRoute('app_pedidosProductos');
        }
    
        //Pasamos el formulario $form
        return $this->render('pedidos_productos/create.html.twig', [
            'form' => $form->createView(),
            'pedidosProductos' => $pedidosProductos,      
        ]);
    }

    //Mostrar 1 columnaEntidad y columnaEntidads que hay dentro del columnaEntidad
    #[Route('/pedidosProducto/{id}', name: 'app_pedidosProducto', methods: ['GET'])]
    public function show(int $id): Response {

        $pedido = $this->entityManager->getRepository(Pedidos::class)->findOneBy(['id' => $id]);

        if (!$pedido) {
            throw $this->createNotFoundException('No se ha encontrado la columnaEntidad');
        }

        $pedidosProducto = $this->entityManager->getRepository(PedidosProductos::class)->findBy(['Pedido' => $pedido]);


        return $this->render('pedidos_productos/show.html.twig', [
            'pedido' => $pedido,
            'pedidosProducto' => $pedidosProducto,
        ]);
    }

    // Actualizar
    #[Route('/pedidosProducto/{id}/edit', name: 'app_pedidosProducto_edit', methods: ['GET', 'POST'])]
    public function edit(int $id, Request $request): Response
    {
        $pedidosProductos = $this->entityManager->getRepository(pedidosProductos::class)->find($id);

        if (!$pedidosProductos) {
            throw $this->createNotFoundException('No se ha encontrado el pedido');
        }

            $form = $this->createForm(PedidosProductoType::class, $pedidosProductos);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $this->entityManager->flush();

                return $this->redirectToRoute('app_pedidosProductos');
            }

        return $this->render('pedidos_productos/edit.html.twig', [
            'form' => $form->createView(),
            'pedidosProductos' => $pedidosProductos,
        ]);
    }

    // Borrar No seguro
    #[Route('/pedidosProducto/{id}/delete', name: 'app_pedidosProducto_delete', methods: ['GET'])]
    public function delete(int $id): Response{
        $pedidosProductos = $this->entityManager->getRepository(PedidosProductos::class)->find($id);
    
        if(!$pedidosProductos){
            throw $this->createNotFoundException('No se ha encontrado el elemento');
        }
    
        $this->entityManager->remove($pedidosProductos);
        $this->entityManager->flush();
    
        return $this->redirectToRoute('app_pedidosProductos');
    }

    // Borrar Seguro
    #[Route('/pedidosProducto/{id}/deleteSeguro', name: 'app_pedidosProducto_deleteSeguro', methods: ['POST'])]
    public function deleteSeguro(int $id, Request $request): Response{
        //Validar la petición
        $submittedToken = $request->request->get('valorToken');

        //Asegurar que es válido
        if(! $this->isCsrfTokenValid('delete-pedidosProductoSeguro', $submittedToken)){
            return $this->redirectToRoute('app_pedidosProductos');
        }

        $pedidosProductos = $this->entityManager->getRepository(PedidosProductos::class)->find($id);

        if(!$pedidosProductos){
            throw $this->createNotFoundException('No se ha encontrado el elememto');
        }

        $this->entityManager->remove($pedidosProductos);
        $this->entityManager->flush();

        return $this->redirectToRoute('app_pedidosProductos');
    }
 
}
