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

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Description = null;

    #[ORM\Column(length: 255)]
    private ?string $Contributeur = null;

    #[ORM\Column(length: 255)]
    private ?string $Animation = null;

    #[ORM\Column(nullable: true)]
    private ?int $Date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom($Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->Img;
    }

    public function setImg($Img): static
    {
        $this->Img = $Img;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->Categorie;
    }

    public function setCategorie($Categorie): static
    {
        $this->Categorie = $Categorie;

        return $this;
    }

    public function getChemin(): ?string
    {
        return $this->Chemin;
    }

    public function setChemin($Chemin): static
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

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription($Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getContributeur(): ?string
    {
        return $this->Contributeur;
    }

    public function setContributeur($Contributeur): static
    {
        $this->Contributeur = $Contributeur;

        return $this;
    }

    public function getAnimation(): ?string
    {
        return $this->Animation;
    }

    public function setAnimation($Contributeur): static
    {
        $this->Animation = $Animation;

        return $this;
    }

    public function getDate(): ?int
    {
        return $this->Date;
    }

    public function setDate(?int $Date): static
    {
        $this->Date = $Date;

        return $this;
    }
}
