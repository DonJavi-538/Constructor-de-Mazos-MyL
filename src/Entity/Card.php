<?php

namespace App\Entity;

use App\Repository\CardRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CardRepository::class)]
class Card
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $edid = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $rarity = null;

    #[ORM\Column(length: 255)]
    private ?string $race = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column(length: 255)]
    private ?string $card_type = null;

    #[ORM\Column(length: 255)]
    private ?string $keywords = null;

    #[ORM\Column(length: 255)]
    private ?string $cost = null;

    #[ORM\Column(length: 255)]
    private ?string $damage = null;

    #[ORM\Column(length: 255)]
    private ?string $ability = null;

    #[ORM\Column(length: 255)]
    private ?string $flavour = null;

    #[ORM\Column(length: 255)]
    private ?string $ed_edid = null;

    #[ORM\Column(length: 255)]
    private ?string $ed_edslug = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getEdid(): ?string
    {
        return $this->edid;
    }

    public function setEdid(string $edid): static
    {
        $this->edid = $edid;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getRarity(): ?string
    {
        return $this->rarity;
    }

    public function setRarity(string $rarity): static
    {
        $this->rarity = $rarity;

        return $this;
    }

    public function getRace(): ?string
    {
        return $this->race;
    }

    public function setRace(string $race): static
    {
        $this->race = $race;

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

    public function getCardType(): ?string
    {
        return $this->card_type;
    }

    public function setCardType(string $card_type): static
    {
        $this->card_type = $card_type;

        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(string $keywords): static
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function getCost(): ?string
    {
        return $this->cost;
    }

    public function setCost(string $cost): static
    {
        $this->cost = $cost;

        return $this;
    }

    public function getDamage(): ?string
    {
        return $this->damage;
    }

    public function setDamage(string $damage): static
    {
        $this->damage = $damage;

        return $this;
    }

    public function getAbility(): ?string
    {
        return $this->ability;
    }

    public function setAbility(string $ability): static
    {
        $this->ability = $ability;

        return $this;
    }

    public function getFlavour(): ?string
    {
        return $this->flavour;
    }

    public function setFlavour(string $flavour): static
    {
        $this->flavour = $flavour;

        return $this;
    }

    public function getEdEdid(): ?string
    {
        return $this->ed_edid;
    }

    public function setEdEdid(string $ed_edid): static
    {
        $this->ed_edid = $ed_edid;

        return $this;
    }

    public function getEdEdslug(): ?string
    {
        return $this->ed_edslug;
    }

    public function setEdEdslug(string $ed_edslug): static
    {
        $this->ed_edslug = $ed_edslug;

        return $this;
    }
}
