<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ParametresController extends AbstractController
{
    #[Route('/parametres', name: 'parametres', methods: ['GET', 'POST'])]
    public function index(): Response
    {
        return $this->render('parametres.html.twig');
    }
}

?>