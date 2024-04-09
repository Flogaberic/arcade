<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AnimationController extends AbstractController
{
    #[Route('/animation', name: 'animation', methods: ['GET', 'POST'])]
    public function index(): Response
    {
        return $this->render('animation.html.twig');
    }
}