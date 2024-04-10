<?php

namespace App\Entity;

use App\Repository\JeuxRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JeuxRepository::class)]
class Jeux
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Img = null;

    #[ORM\Column(length: 255)]
    private ?string $Categorie = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Chemin = null;

    #[ORM\Column(nullable: true)]
    private ?int $Highscore = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->Img;
    }

    public function setImg(string $Img): static
    {
        $this->Img = $Img;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->Categorie;
    }

    public function setCategorie(string $Categorie): static
    {
        $this->Categorie = $Categorie;

        return $this;
    }

    public function getChemin(): ?string
    {
        return $this->Chemin;
    }

    public function setChemin(string $Chemin): static
    {
        $this->Chemin = $Chemin;

        return $this;
    }

    public function getHighscore(): ?int
    {
        return $this->Highscore;
    }

    public function setHighscore(?int $Highscore): static
    {
        $this->Highscore = $Highscore;

        return $this;
    }
}
