<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use Doctrine\ORM\EntityManagerInterface; //EntityManagerInterface

//Obtener datos
use App\Entity\Categorias;                 //Entidad
use App\Entity\Productos;                     //Entidad NombreEntidad2, se añade para mostrar datos de esta dentro de la anterior (Ej: Productos dentro de una categoría / Movie dentro de Genre)

//Formularios
use App\Form\CategoriaType;
use Symfony\Component\HttpFoundation\Request;

class CategoriasController extends AbstractController
{
    //Constructor
    public function __construct(private readonly EntityManagerInterface $entityManager) //readonly - Solo de lectura
    {

    }

    //Ver todos
    #[Route('/categorias', name: 'app_categorias', methods: ['GET', 'HEAD'])]
    public function index(): Response
    {
        //categorias obtiene todos los datos de categorias
        $categorias = $this->entityManager->getRepository(Categorias::class)->findAll();  //categorias::class - entidad. entityManager -> definido en el constructor
        // dd($categorias);  //Quita la vista, para mostrar array de lo que obtiene
        // return $this->json($categorias); //Para trabajar con Json
        return $this->render('categorias/index.html.twig', [
            'categorias' => $categorias, //Pasa al index todas las categorias. 'clave' => $valor -> clave es lo que pasa a index, a la vista
        ]);
    }

    //Crear categoría 
    #[Route('/categorias/create', name: 'app_categoria_create', methods: ['GET','POST'])]
    public function create(Request $request): Response{ //Mostrar y procesar el formulario
        $categoria = new Categorias();       //Nueva instancia de la entidad categoria
        $form = $this->createForm(CategoriaType::class, $categoria);  //Crear formulario
        
        $form->handleRequest($request);  //Formulario maneje la petición pasandole el $request

        if($form->isSubmitted() && $form->isValid()){  //Si es tá pulsado el botón de enviar formulario y si es válido
            $this->entityManager->persist($categoria);  //Persiste la categoría
            $this->entityManager->flush();          //Guarda en la base de datos
            
            return $this->redirectToRoute('app_categoria', ['id' => $categoria->getId()]); //Redirecciona al DETALLE de la categoría, a la ruta app_categoria, que se refiere a #[Route('/categorias/{id}', 
            //name: 'app_categoria', methods: ['GET'])], especialmente /categorias/{id} es decir categorias con la id pasada
        }

        //Pasamos el formulario $form
        return $this->render('categorias/create.html.twig', [
            'form' => $form->createView(),                  //Para que se vea
        ]);
    }

    
    //Mostrar 1 columnaEntidad y columnaEntidads que hay dentro del columnaEntidad
    #[Route('/categoria/{id}', name: 'app_categoria', methods: ['GET'])]
    public function show(int $id): Response{

        $categoria = $this->entityManager->getRepository(Categorias::class)->find($id);

        if(!$categoria){
            throw $this->createNotFoundException('No se ha encontrado la columnaEntidad');
        }

        $productos = $this->entityManager->getRepository(Productos::class)->findBy(['categoria' => $categoria]);

        return $this->render('categorias/show.html.twig', [
            'categoria' => $categoria,            //'clave' => $valor -> clave es lo que pasa a show, a la vista
            'productos' => $productos,
        ]);
    }

    // Actualizar 
    #[Route('/categorias/{id}/edit', name: 'app_categoria_edit', methods: ['GET','POST'])]
    public function edit(int $id, Request $request): Response{ 

        $categoria = $this->entityManager->getRepository(Categorias::class)->find($id); 

        if(!$categoria){
            throw $this->createNotFoundException('No se ha encontrado la categoría');
        }

        $form = $this->createForm(CategoriaType::class, $categoria);  
        
        $form->handleRequest($request);  

        if($form->isSubmitted() && $form->isValid()){ 
            $this->entityManager->flush();          
            
            return $this->redirectToRoute('app_categorias'); 
        }

        return $this->render('categorias/edit.html.twig', [  
            'form' => $form->createView(), 
            'categoria' => $categoria,                   //'clave' => $valor -> clave es lo que pasa a edit, a la vista
        ]);
    }

    // Borrar No seguro
    #[Route('/categorias/{id}/delete', name: 'app_categoria_delete', methods: ['GET'])]
    public function delete(int $id): Response{ 
        $categoria = $this->entityManager->getRepository(Categorias::class)->find($id);
        
        if(!$categoria){
            throw $this->createNotFoundException('No se ha encontrado el elemento');
        }
    
        $productos = $this->entityManager->getRepository(Productos::class)->findBy(['categoria' => $categoria]); 
    
        if(count($productos) > 0){
            $this->addFlash('danger', 'No se puede borrar un elemento que se esté usando');
            return $this->redirectToRoute('app_categorias'); 
        }
        
        $this->entityManager->remove($categoria);
        $this->entityManager->flush();
    
        return $this->redirectToRoute('app_categorias');
    }

    // Borrar Seguro
    #[Route('/categorias/{id}/deleteSeguro', name: 'app_categoria_deleteSeguro', methods: ['POST'])]
    public function deleteSeguro(int $id, Request $request): Response{ 
        //Validar la petición
        $submittedToken = $request->request->get('valorToken'); 

        //Asegurar que es válido
        if(! $this->isCsrfTokenValid('delete-categoriasSeguro', $submittedToken)){ 
            return $this->redirectToRoute('app_categorias'); 
        }

        $categoria = $this->entityManager->getRepository(Categorias::class)->find($id); 
        
        if(!$categoria){
            throw $this->createNotFoundException('No se ha encontrado la categoría');
        }

        $productos = $this->entityManager->getRepository(Productos::class)->findBy(['categoria' => $categoria]);

        if(count($productos) > 0){
            $this->addFlash('danger', 'No se puede borrar el elemento que se esté usando');
            return $this->redirectToRoute('app_categorias');
        }
        
        $this->entityManager->remove($categoria); 
        $this->entityManager->flush(); 

        return $this->redirectToRoute('app_categorias'); 
    }

}
