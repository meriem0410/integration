<?php

namespace App\Entity;

use App\Repository\HebergementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HebergementRepository::class)]
class Hebergement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank]
    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[Assert\NotBlank]
    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[Assert\NotBlank]
    #[Assert\GreaterThan(5)]
    #[ORM\Column]
    private ?float $prix = null;

    #[Assert\NotBlank]
    #[ORM\Column]
    private ?int $maxguest = null;

    #[Assert\NotBlank]
    #[ORM\Column]
    private ?int $room = null;

    #[Assert\NotBlank]
    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[Assert\NotBlank]
    //#[ORM\Column(length: 255)]
    //private ?string $amenitites = null;
    #[ORM\Column(type: "json")]
    private $amenities = [];

    #[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'Hebergement')]
    private Collection $reservations;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\OneToMany(targetEntity: Avis::class, mappedBy: 'Hebergement')]
    private Collection $avis;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
        $this->amenities = [];
        $this->avis = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

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

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getMaxguest(): ?int
    {
        return $this->maxguest;
    }

    public function setMaxguest(int $maxguest): static
    {
        $this->maxguest = $maxguest;

        return $this;
    }

    public function getRoom(): ?int
    {
        return $this->room;
    }

    public function setRoom(int $room): static
    {
        $this->room = $room;

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

    public function getAmenities(): array
    {
        return $this->amenities ?? [];
    }

    public function setAmenities(array $amenities): self
    {
        $this->amenities = $amenities;

        return $this;
    }

    // Méthode pour ajouter une commodité individuelle
    public function addAmenity($amenity): self
    {
        if (!in_array($amenity, $this->amenities, true)) {
            $this->amenities[] = $amenity;
        }

        return $this;
    }

    // Méthode pour supprimer une commodité
    public function removeAmenity($amenity): self
    {
        if (false !== $key = array_search($amenity, $this->amenities, true)) {
            array_splice($this->amenities, $key, 1);
        }

        return $this;
    }


    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): static
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations->add($reservation);
            $reservation->setHebergement($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): static
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getHebergement() === $this) {
                $reservation->setHebergement(null);
            }
        }

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection<int, Avis>
     */
    public function getAvis(): Collection
    {
        return $this->avis;
    }

    public function addAvi(Avis $avi): static
    {
        if (!$this->avis->contains($avi)) {
            $this->avis->add($avi);
            $avi->setHebergement($this);
        }

        return $this;
    }

    public function removeAvi(Avis $avi): static
    {
        if ($this->avis->removeElement($avi)) {
            // set the owning side to null (unless already changed)
            if ($avi->getHebergement() === $this) {
                $avi->setHebergement(null);
            }
        }

        return $this;
    }
}
   