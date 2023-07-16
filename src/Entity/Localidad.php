<?php

namespace App\Entity;

use App\Repository\LocalidadRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LocalidadRepository::class)]
class Localidad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $placeName = null;

    #[ORM\Column(length: 255)]
    private ?string $placeType = null;

    #[ORM\Column]
    private ?int $placePopulation = null;

    #[ORM\Column(length: 255)]
    private ?string $placeDescription = null;

    #[ORM\Column(length: 255)]
    private ?string $placeImg = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlaceName(): ?string
    {
        return $this->placeName;
    }

    public function setPlaceName(string $placeName): static
    {
        $this->placeName = $placeName;

        return $this;
    }

    public function getPlaceType(): ?string
    {
        return $this->placeType;
    }

    public function setPlaceType(string $placeType): static
    {
        $this->placeType = $placeType;

        return $this;
    }

    public function getPlacePopulation(): ?int
    {
        return $this->placePopulation;
    }

    public function setPlacePopulation(int $placePopulation): static
    {
        $this->placePopulation = $placePopulation;

        return $this;
    }

    public function getPlaceDescription(): ?string
    {
        return $this->placeDescription;
    }

    public function setPlaceDescription(string $placeDescription): static
    {
        $this->placeDescription = $placeDescription;

        return $this;
    }

    public function getPlaceImg(): ?string
    {
        return $this->placeImg;
    }

    public function setPlaceImg(string $placeImg): static
    {
        $this->placeImg = $placeImg;

        return $this;
    }
}
