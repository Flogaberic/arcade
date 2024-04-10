<?php

namespace App\Controller;

use App\Entity\Jeux;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class JeuxAddController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/jeux-add', name: 'jeux.add', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        EntityManagerInterface $manager
        ): Response
    {
        $nom = $request->request->get('nom');
        $image = $request->request->get('image');
        $categorie = $request->request->get('categorie');
        $chemin = $request->request->get('chemin');

        $jeu = new Jeux();
        $jeu->setNom($nom);
        $jeu->setImg($image);
        $jeu->setCategorie($categorie);
        $jeu->setChemin($chemin);

        $manager->persist($jeu);
        $manager->flush();

        return $this->redirectToRoute('jeux.liste');
    }

    #[Route('/jeux-add-form', name: 'jeux.add.form')]
    public function afficherFormulaireAjoutJeu(): Response
    {
        return $this->render('jeuxadd.html.twig');
    }
}