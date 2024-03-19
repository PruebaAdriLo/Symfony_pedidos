<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use Doctrine\ORM\EntityManagerInterface; //EntityManagerInterface

//Formularios
use App\Form\PedidoType;
use Symfony\Component\HttpFoundation\Request;

//Obtener datos
use App\Entity\Pedidos;                 //Entidad

class PedidosController extends AbstractController
{
    //Constructor
    public function __construct(private readonly EntityManagerInterface $entityManager) //readonly - Solo de lectura
    {

    }

    //Ver todos
    #[Route('/pedidos', name: 'app_pedidos', methods: ['GET', 'HEAD'])]
    public function index(): Response
    {
        //pedidos obtiene todos los datos de Pedidos
        $pedidos = $this->entityManager->getRepository(Pedidos::class)->findAll();  
    
        return $this->render('pedidos/index.html.twig', [
            'pedidos' => $pedidos,
        ]);
    }

   
    //Crear 
    #[Route('/pedido/create', name: 'app_pedido_create', methods: ['GET','POST'])]
    public function create(Request $request): Response{
        $pedidos = new Pedidos();
        $form = $this->createForm(PedidoType::class, $pedidos);  

        $form->handleRequest($request);  

        if($form->isSubmitted() && $form->isValid()){
            $this->entityManager->persist($pedidos);  
            $this->entityManager->flush();         

            // Redirige al formulario de creación de PedidosProductos, pasando el ID del pedido
            return $this->redirectToRoute('app_pedidosProductos_create', ['pedidoId' => $pedidos->getId()]); //Relacionandolo con PedidosProductos
            // return $this->redirectToRoute('app_pedido', ['id' => $pedidos->getId()]); //Sin relacionar con PedidosProductos
        }

        //Pasamos el formulario $form
        return $this->render('pedidos/create.html.twig', [
            'form' => $form->createView(),  
            'pedidos' => $pedidos,             
        ]);
    }

    //Mostrar 1 columnaEntidad
    #[Route('/pedido/{id}', name: 'app_pedido', methods: ['GET'])]
    public function show(int $id): Response{
    
        $pedido = $this->entityManager->getRepository(Pedidos::class)->find($id);
    
        if(!$pedido){
            throw $this->createNotFoundException('No se ha encontrado el pedido');
        }
    
        return $this->render('pedidos/show.html.twig', [
            'pedido' => $pedido,   
        ]);
    }
 
}
