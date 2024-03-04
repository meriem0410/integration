<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Checkin = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Checkout = null;

    #[ORM\Column]
    private ?int $nbguest = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Hebergement $hebergement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCheckin(): ?\DateTimeInterface
    {
        return $this->Checkin;
    }

    public function setCheckin(\DateTimeInterface $Checkin): static
    {
        $this->Checkin = $Checkin;

        return $this;
    }

    public function getCheckout(): ?\DateTimeInterface
    {
        return $this->Checkout;
    }

    public function setCheckout(\DateTimeInterface $Checkout): static
    {
        $this->Checkout = $Checkout;

        return $this;
    }

    public function getNbguest(): ?int
    {
        return $this->nbguest;
    }

    public function setNbguest(int $nbguest): static
    {
        $this->nbguest = $nbguest;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getHebergement(): ?Hebergement
    {
        return $this->Hebergement;
    }

    public function setHebergement(?Hebergement $Hebergement): static
    {
        $this->Hebergement = $Hebergement;

        return $this;
    }

}
