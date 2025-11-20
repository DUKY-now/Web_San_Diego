<?php

namespace App\Entity;

use App\Repository\FactionsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FactionsRepository::class)]
class Factions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $lore = null;

    #[ORM\Column]
    private ?int $membres = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    /**
     * @var Collection<int, Members>
     */
    #[ORM\OneToMany(targetEntity: Members::class, mappedBy: 'Appartenance')]
    private Collection $faction;

    public function __construct()
    {
        $this->faction = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getLore(): ?string
    {
        return $this->lore;
    }

    public function setLore(string $lore): static
    {
        $this->lore = $lore;

        return $this;
    }

    public function getMembres(): ?int
    {
        return $this->membres;
    }

    public function setMembres(int $membres): static
    {
        $this->membres = $membres;

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

    /**
     * @return Collection<int, Members>
     */
    public function getFaction(): Collection
    {
        return $this->faction;
    }

    public function addFaction(Members $faction): static
    {
        if (!$this->faction->contains($faction)) {
            $this->faction->add($faction);
            $faction->setAppartenance($this);
        }

        return $this;
    }

    public function removeFaction(Members $faction): static
    {
        if ($this->faction->removeElement($faction)) {
            // set the owning side to null (unless already changed)
            if ($faction->getAppartenance() === $this) {
                $faction->setAppartenance(null);
            }
        }

        return $this;
    }
}
