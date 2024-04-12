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

    #[Route('/jeux-liste', name: 'jeux.liste', methods: ['GET'])]
    public function list(): Response
    {
        $jeux = $this->entityManager->getRepository(Jeux::class)->findAll();

        return $this->render('jeuxliste.html.twig', [
            'jeux' => $jeux
        ]);
    }

    #[Route('/jeux-add', name: 'jeux.add', methods: ['GET', 'POST'])]
    public function add(
        Request $request,
        EntityManagerInterface $manager
        ): Response
    {
        $nom = $request->request->get('nom');
        $image = $request->request->get('image');
        $categorie = $request->request->get('categorie');
        $chemin = $request->request->get('chemin');
        $description = $request->request->get('description');
        $contributeur = $request->request->get('contributeur');
        $date = $request->request->get('date');

        $jeu = new Jeux();
        $jeu->setNom($nom);
        $jeu->setImg($image);
        $jeu->setCategorie($categorie);
        $jeu->setChemin($chemin);
        $jeu->setDescription($description);
        $jeu->setContributeur($contributeur);
        $jeu->setDate($date);

        $manager->persist($jeu);
        $manager->flush();

        return $this->redirectToRoute('jeux.liste');
    }

    #[Route('/jeux-add-form', name: 'jeux.add.form')]
    public function afficherFormulaireAjoutJeu(): Response
    {
        return $this->render('jeuxadd.html.twig');
    }

    #[Route('/jeux-supp-action', name: 'jeux.supp.action', methods: ['GET', 'POST'])]
    public function supp(
        Request $request,
        EntityManagerInterface $manager
        ): Response
    {
        $id = $request->request->get('id');

        $jeu = $manager->getRepository(Jeux::class)->find($id);

        if (!$jeu) {
            throw $this->createNotFoundException('Jeu non trouvé');
        }

        $manager->remove($jeu);
        $manager->flush();

        return $this->redirectToRoute('jeux.liste');
    }

    #[Route('/jeux-supp', name: 'jeux.supp', methods: ['GET', 'POST'])]
    public function suppform(): Response
    {
        return $this->render('jeuxsupp.html.twig');
    }
}