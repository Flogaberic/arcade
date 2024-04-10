<?php

namespace App\Controller;

use App\Entity\Jeux;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GladnslashController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/gladnslash', name: 'gladnslash', methods: ['GET', 'POST'])]
    public function index(): Response
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