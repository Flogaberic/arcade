<?php

namespace App\Controller;

use App\Entity\Jeux;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CategorieController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/categories', name: 'categories', methods: ['GET', 'POST'])]
    public function index(): Response
    {
        return $this->render('categories.html.twig');
    }

    #[Route('/categories.1', name: 'categories.1', methods: ['GET', 'POST'])]
    public function categorie1(): Response
    {
        $jeu = $this->entityManager->getRepository(Jeux::class)->findOneBy(['id' => '1']);
        $img = $jeu ? $jeu->getImg() : 'Aucun jeu trouvé';
        $chemin = $jeu ? $jeu->getChemin() : 'Aucun jeu trouvé';

        return $this->render('plateformes.html.twig', [
            'img' => $img,
            'chemin' => $chemin
        ]);
    }

    #[Route('/categories.2', name: 'categories.2', methods: ['GET', 'POST'])]
    public function categorie2(): Response
    {
        $jeu = $this->entityManager->getRepository(Jeux::class)->findOneBy(['id' => '2']);
        $img = $jeu ? $jeu->getImg() : 'Aucun jeu trouvé';
        $chemin = $jeu ? $jeu->getChemin() : 'Aucun jeu trouvé';

        return $this->render('clickers.html.twig', [
            'img' => $img,
            'chemin' => $chemin
        ]);
    }

    #[Route('/categories.3', name: 'categories.3', methods: ['GET', 'POST'])]
    public function categorie3(): Response
    {
        $jeu = $this->entityManager->getRepository(Jeux::class)->findOneBy(['id' => '3']);
        $img = $jeu ? $jeu->getImg() : 'Aucun jeu trouvé';
        $chemin = $jeu ? $jeu->getChemin() : 'Aucun jeu trouvé';

        return $this->render('classiques.html.twig', [
            'img' => $img,
            'chemin' => $chemin
        ]);
    }
}
