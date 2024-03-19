<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request; 
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Restaurantes;

class AuthController extends AbstractController
{
    public function __construct(private readonly EntityManagerInterface $entityManager)
    {

    }

    #[Route('/login', name: 'app_login')]
    public function index(Request $request): Response 
    {
        $error = '';

        if ($request->isMethod('POST')) {
            $Correo = $request->request->get('Correo');
            $clave = $request->request->get('clave');

            $restaurante = $this->entityManager->getRepository(Restaurantes::class)->findOneBy([
                'Correo' => $Correo,
                'clave' => $clave,
            ]);

            if ($restaurante) {
                return $this->redirectToRoute('app_categorias');
            } else {
                $error = 'Usuario o clave incorrectos';
            }
        }

        return $this->render('auth/index.html.twig', [
            'error' => $error,
        ]);
    }
}