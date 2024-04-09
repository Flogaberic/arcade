<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminUsersController extends AbstractController
{
    #[Route('/admin-users', name: 'admin.users', methods: ['GET'])]
    public function index(): Response
    {

        return $this->render('adminusers.html.twig');
    }
}