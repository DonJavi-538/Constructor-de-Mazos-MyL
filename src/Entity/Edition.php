<?php

namespace App\Entity;

use App\Repository\EditionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EditionRepository::class)]
class Edition
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $ed_order = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(length: 255)]
    private ?string $date_release = null;

    #[ORM\Column(length: 255)]
    private ?string $date_empire_valid = null;

    #[ORM\Column(length: 255)]
    private ?string $custom_bg = null;

    #[ORM\Column(length: 255)]
    private ?string $flags = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getEdOrder(): ?string
    {
        return $this->ed_order;
    }

    public function setEdOrder(string $ed_order): static
    {
        $this->ed_order = $ed_order;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getDateRelease(): ?string
    {
        return $this->date_release;
    }

    public function setDateRelease(string $date_release): static
    {
        $this->date_release = $date_release;

        return $this;
    }

    public function getDateEmpireValid(): ?string
    {
        return $this->date_empire_valid;
    }

    public function setDateEmpireValid(string $date_empire_valid): static
    {
        $this->date_empire_valid = $date_empire_valid;

        return $this;
    }

    public function getCustomBg(): ?string
    {
        return $this->custom_bg;
    }

    public function setCustomBg(string $custom_bg): static
    {
        $this->custom_bg = $custom_bg;

        return $this;
    }

    public function getFlags(): ?string
    {
        return $this->flags;
    }

    public function setFlags(string $flags): static
    {
        $this->flags = $flags;

        return $this;
    }
}
