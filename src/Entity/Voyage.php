<?php

namespace App\Entity;

use App\Repository\VoyageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: VoyageRepository::class)]
class Voyage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le champ destination ne peut pas être vide")]
    #[Assert\Type(type: "string", message: "La destination doit être une chaîne de caractères")]
    private ?string $destination = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le champ prix ne peut pas être vide")]
    #[Assert\Type(type: "float", message: "Le prix doit être un nombre")]
    private ?float $prix = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "Le champ date ne peut pas être vide")]
    #[Assert\Type(type: "\DateTimeInterface", message: "La date doit être une date valide")]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le champ type ne peut pas être vide")]
    #[Assert\Type(type: "string", message: "Le type doit être une chaîne de caractères")]
    private ?string $type = null;

    #[ORM\OneToOne(mappedBy: 'voyage', cascade: ['persist', 'remove'])]
    private ?Programme $programme = null;
    
    #[ORM\OneToOne(mappedBy: 'pays')] 
    private ?Res $res; 

   

 

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(string $destination): static
    {
        $this->destination = $destination;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getProgramme(): ?Programme
    {
        return $this->programme;
    }

    public function setProgramme(Programme $programme): static
    {
        if ($programme->getVoyage() !== $this) {
            $programme->setVoyage($this);
        }

        $this->programme = $programme;

        return $this;
    }

   
   
    

   
}
