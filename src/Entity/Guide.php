<?php

namespace App\Entity;

use App\Repository\GuideRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GuideRepository::class)]
class Guide
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"entrer nom ")]
    #[Assert\Length(
        min: 2,
        max: 255,
        minMessage: 'Your name must be at least {{ limit }} characters long',
        maxMessage: 'Your name cannot be longer than {{ limit }} characters',
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"entrer prenom ")]
    #[Assert\Length(
        min: 2,
        max: 255,
        minMessage: 'Your Last name must be at least {{ limit }} characters long',
        maxMessage: 'Your Last name cannot be longer than {{ limit }} characters',
    )]
    private ?string $prenom = null;
    
    #[ORM\Column]
    #[Assert\NotBlank(message:"entrer num tel ")]
    #[Assert\Positive(message:"la num tel doit etre positive ! ")]
    #[Assert\Length(
        min: 8,
        max: 8,
        minMessage: 'Your num tel must be at least {{ limit }} characters long',
        maxMessage: 'Your num tel cannot be longer than {{ limit }} characters',
    )]
    private ?int $num_tel = null;

    #[ORM\Column]
    private ?bool $disponibilite = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\OneToMany(targetEntity: Excursion::class, mappedBy: 'relation')]
    private Collection $excursions;

    #[ORM\Column]
    private ?int $Likes = null;

    #[ORM\Column]
    private ?int $Dislikes = null;

    public function __construct()
    {
        $this->excursions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNumTel(): ?int
    {
        return $this->num_tel;
    }

    public function setNumTel(int $num_tel): static
    {
        $this->num_tel = $num_tel;

        return $this;
    }

    public function isDisponibilite(): ?bool
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(bool $disponibilite): static
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    /**
     * @return Collection<int, Excursion>
     */
    public function getExcursions(): Collection
    {
        return $this->excursions;
    }

    public function addExcursion(Excursion $excursion): static
    {
        if (!$this->excursions->contains($excursion)) {
            $this->excursions->add($excursion);
            $excursion->setRelation($this);
        }

        return $this;
    }

    public function removeExcursion(Excursion $excursion): static
    {
        if ($this->excursions->removeElement($excursion)) {
            // set the owning side to null (unless already changed)
            if ($excursion->getRelation() === $this) {
                $excursion->setRelation(null);
            }
        }

        return $this;
    }

    public function getLikes(): ?int
    {
        return $this->Likes;
    }

    public function setLikes(int $Likes): static
    {
        $this->Likes = $Likes;

        return $this;
    }

    public function getDislikes(): ?int
    {
        return $this->Dislikes;
    }

    public function setDislikes(int $Dislikes): static
    {
        $this->Dislikes = $Dislikes;

        return $this;
    }
}
