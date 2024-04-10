<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class JeuxSuppController extends AbstractController
{
    #[Route('/jeux-supp', name: 'jeux.supp', methods: ['GET', 'POST'])]
    public function index(): Response
    {
        return $this->render('jeuxsupp.html.twig');
    }
}