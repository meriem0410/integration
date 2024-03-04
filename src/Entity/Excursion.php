<?php

namespace App\Entity;

use App\Repository\ExcursionRepository;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\ORM\Mapping as ORM;
use App\Validator\Constraints as AppAssert;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ExcursionRepository::class)]
class Excursion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"entrer titre ")]
    #[Assert\Length(
        min: 3,
        max: 255,
        minMessage: 'Le titre doit avoir au moinsx {{ limit }} characters ',
        maxMessage: 'Your first name cannot be longer than {{ limit }} characters',
    )]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"entrer Description ")]
    #[Assert\Length(
        min: 10,
        max: 255,
        minMessage: 'La description doit avoir au moins {{ limit }} characters ',
        maxMessage: 'Your description name cannot be longer than {{ limit }} characters',
    )]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"entrer ville ")]
    #[Assert\Length(
        min: 3,
        max: 255,
        minMessage: 'Le nom de la ville doit avoir au moins {{ limit }} characters',
        maxMessage: 'Your ville name cannot be longer than {{ limit }} characters',
    )]
    private ?string $ville = null;

    #[ORM\Column(length: 255)]
    private ?string $video = null;


    #[ORM\ManyToOne(inversedBy: 'excursions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Guide $relation = null;

    #[ORM\Column]
    private ?float $latitude = null;

    #[ORM\Column]
    private ?float $longitude = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getRelation(): ?Guide
    {
        return $this->relation;
    }

    public function setRelation(?Guide $relation): static
    {
        $this->relation = $relation;

        return $this;
    }
    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(string $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): static
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): static
    {
        $this->longitude = $longitude;

        return $this;
    }
}
