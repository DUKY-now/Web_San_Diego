<?php

namespace App\Entity;

use App\Repository\PosteAdminRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PosteAdminRepository::class)]
class PosteAdmin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Poste = null;

    /**
     * @var Collection<int, Staffs>
     */
    #[ORM\OneToMany(targetEntity: Staffs::class, mappedBy: 'posteAdmin')]
    private Collection $Pseudo;

    public function __construct()
    {
        $this->Pseudo = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPoste(): ?string
    {
        return $this->Poste;
    }

    public function setPoste(string $Poste): static
    {
        $this->Poste = $Poste;

        return $this;
    }

    /**
     * @return Collection<int, Staffs>
     */
    public function getPseudo(): Collection
    {
        return $this->Pseudo;
    }

    public function addPseudo(Staffs $pseudo): static
    {
        if (!$this->Pseudo->contains($pseudo)) {
            $this->Pseudo->add($pseudo);
            $pseudo->setPosteAdmin($this);
        }

        return $this;
    }

    public function removePseudo(Staffs $pseudo): static
    {
        if ($this->Pseudo->removeElement($pseudo)) {
            // set the owning side to null (unless already changed)
            if ($pseudo->getPosteAdmin() === $this) {
                $pseudo->setPosteAdmin(null);
            }
        }

        return $this;
    }
}
