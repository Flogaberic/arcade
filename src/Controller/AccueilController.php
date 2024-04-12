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

    #[Route('/ongame1', name: 'ongame1', methods: ['GET', 'POST'])]
    public function ongam1(): Response
    {
        return $this->render('ongame1.html.twig');
    }

    #[Route('/accueil.1', name: 'accueil1', methods: ['GET', 'POST'])]
    public function jeu1(): Response
    {
        # Remplacer l'id par le numéro du jeu
        $jeu = $this->entityManager->getRepository(Jeux::class)->findOneBy(['id' => '1']);

        $nom = $jeu ? $jeu->getNom() : 'Aucun jeu trouvé';
        $img = $jeu ? $jeu->getImg() : 'Aucun jeu trouvé';
        $categorie = $jeu ? $jeu->getCategorie() : 'Aucun jeu trouvé';
        $chemin = $jeu ? $jeu->getChemin() : 'Aucun jeu trouvé';
        $highscore = $jeu ? $jeu->getHighscore() : 'Aucun jeu trouvé';
        $description = $jeu ? $jeu->getDescription() : 'Aucun jeu trouvé';
        $date = $jeu ? $jeu->getDate() : 'Aucun jeu trouvé';
        $contributeur = $jeu ? $jeu->getContributeur() : 'Aucun jeu trouvé';

        return $this->render('gladnslash.html.twig', [
            'nom' => $nom,
            'chemin' => $chemin,
            'img' => $img,
            'categorie' => $categorie,
            'highscore' => $highscore,
            'description' => $description,
            'date' => $date,
            'contributeur' => $contributeur
        ]);
    }

    #[Route('/ongame2', name: 'ongame2', methods: ['GET', 'POST'])]
    public function ongame2(): Response
    {
        return $this->render('ongame2.html.twig');
    }

    #[Route('/accueil.2', name: 'accueil2', methods: ['GET', 'POST'])]
    public function jeu2(): Response
    {
        # Remplacer l'id par le numéro du jeu
        $jeu = $this->entityManager->getRepository(Jeux::class)->findOneBy(['id' => '2']);

        $nom = $jeu ? $jeu->getNom() : 'Aucun jeu trouvé';
        $img = $jeu ? $jeu->getImg() : 'Aucun jeu trouvé';
        $categorie = $jeu ? $jeu->getCategorie() : 'Aucun jeu trouvé';
        $chemin = $jeu ? $jeu->getChemin() : 'Aucun jeu trouvé';
        $highscore = $jeu ? $jeu->getHighscore() : 'Aucun jeu trouvé';
        $description = $jeu ? $jeu->getDescription() : 'Aucun jeu trouvé';
        $date = $jeu ? $jeu->getDate() : 'Aucun jeu trouvé';
        $contributeur = $jeu ? $jeu->getContributeur() : 'Aucun jeu trouvé';

        return $this->render('legendere.html.twig', [
            'nom' => $nom,
            'chemin' => $chemin,
            'img' => $img,
            'categorie' => $categorie,
            'highscore' => $highscore,
            'description' => $description,
            'date' => $date,
            'contributeur' => $contributeur
        ]);
    }

    #[Route('/ongame3', name: 'ongame3', methods: ['GET', 'POST'])]
    public function ongame3(): Response
    {
        return $this->render('ongame3.html.twig');
    }

    #[Route('/accueil.3', name: 'accueil3', methods: ['GET', 'POST'])]
    public function jeu3(): Response
    {
        # Remplacer l'id par le numéro du jeu
        $jeu = $this->entityManager->getRepository(Jeux::class)->findOneBy(['id' => '3']);

        $nom = $jeu ? $jeu->getNom() : 'Aucun jeu trouvé';
        $img = $jeu ? $jeu->getImg() : 'Aucun jeu trouvé';
        $categorie = $jeu ? $jeu->getCategorie() : 'Aucun jeu trouvé';
        $chemin = $jeu ? $jeu->getChemin() : 'Aucun jeu trouvé';
        $highscore = $jeu ? $jeu->getHighscore() : 'Aucun jeu trouvé';
        $description = $jeu ? $jeu->getDescription() : 'Aucun jeu trouvé';
        $date = $jeu ? $jeu->getDate() : 'Aucun jeu trouvé';
        $contributeur = $jeu ? $jeu->getContributeur() : 'Aucun jeu trouvé';

        return $this->render('pacman.html.twig', [
            'nom' => $nom,
            'chemin' => $chemin,
            'img' => $img,
            'categorie' => $categorie,
            'highscore' => $highscore,
            'description' => $description,
            'date' => $date,
            'contributeur' => $contributeur
        ]);
    }
}