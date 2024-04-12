<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class EmulateurController extends AbstractController
{
    #[Route('/emulateur', name: 'emulateur', methods: ['GET', 'POST'])]
    public function index(): Response
    {
        return $this->render('emulateur.html.twig');
    }
}