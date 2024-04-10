<?php

namespace App\Controller;

use App\Entity\Jeux;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class JeuxListeController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/jeux-liste', name: 'jeux.liste', methods: ['GET'])]
    public function index(): Response
    {
        $jeux = $this->entityManager->getRepository(Jeux::class)->findAll();

        return $this->render('jeuxliste.html.twig', [
            'jeux' => $jeux
        ]);
    }
}