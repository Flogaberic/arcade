<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CategorieController extends AbstractController
{
    #[Route('/categories', name: 'categories', methods: ['GET', 'POST'])]
    public function index(): Response
    {
        return $this->render('categories.html.twig');
    }

    #[Route('/categories.1', name: 'categories.1', methods: ['GET', 'POST'])]
    public function categorie1(): Response
    {
        return $this->render('plateformes.html.twig');
    }

    #[Route('/categories.2', name: 'categories.2', methods: ['GET', 'POST'])]
    public function categorie2(): Response
    {
        return $this->render('clickers.html.twig');
    }
}
