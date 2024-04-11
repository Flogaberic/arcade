<?php

namespace App\Controller;

use App\Entity\Jeux;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AccueilController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/accueil', name: 'accueil', methods: ['GET', 'POST'])]
    public function index(): Response
    {
        # Remplacer l'id par le numéro du jeu
        $jeu1 = $this->entityManager->getRepository(Jeux::class)->findOneBy(['id' => '1']);
        $img1 = $jeu1 ? $jeu1->getImg() : 'Aucun jeu trouvé';
        $chemin1 = $jeu1 ? $jeu1->getChemin() : 'Aucun jeu trouvé';

        # Remplacer l'id par le numéro du jeu
        $jeu2 = $this->entityManager->getRepository(Jeux::class)->findOneBy(['id' => '2']);
        $img2 = $jeu2 ? $jeu2->getImg() : 'Aucun jeu trouvé';
        $chemin2 = $jeu2 ? $jeu2->getChemin() : 'Aucun jeu trouvé';

        # Remplacer l'id par le numéro du jeu
        $jeu3 = $this->entityManager->getRepository(Jeux::class)->findOneBy(['id' => '3']);
        $img3 = $jeu3 ? $jeu3->getImg() : 'Aucun jeu trouvé';
        $chemin3 = $jeu3 ? $jeu3->getChemin() : 'Aucun jeu trouvé';

        return $this->render('accueil.html.twig', [
            'img1' => $img1,
            'img2' => $img2,
            'img3' => $img3,
            'chemin1' => $chemin1,
            'chemin2' => $chemin2,
            'chemin3' => $chemin3
        ]);
    }

    #[Route('/accueil.1', name: 'accueil1', methods: ['GET', 'POST'])]
    public function jeu(): Response
    {
        # Remplacer l'id par le numéro du jeu
        $jeu = $this->entityManager->getRepository(Jeux::class)->findOneBy(['id' => '1']);

        $nom = $jeu ? $jeu->getNom() : 'Aucun jeu trouvé';
        $img = $jeu ? $jeu->getImg() : 'Aucun jeu trouvé';
        $categorie = $jeu ? $jeu->getCategorie() : 'Aucun jeu trouvé';
        $chemin = $jeu ? $jeu->getChemin() : 'Aucun jeu trouvé';
        $highscore = $jeu ? $jeu->getHighscore() : 'Aucun jeu trouvé';

        return $this->render('gladnslash.html.twig', [
            'nom' => $nom,
            'chemin' => $chemin,
            'img' => $img,
            'categorie' => $categorie,
            'highscore' => $highscore
        ]);
    }
}