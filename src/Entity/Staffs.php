<?php

namespace App\Entity;

use App\Repository\StaffsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StaffsRepository::class)]
class Staffs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $pseudo = null;

    #[ORM\Column(length: 255)]
    private ?string $role = null;

    #[ORM\Column(length: 255)]
    private ?string $photo = null;

    /**
     * @var Collection<int, Staffs>
     */
    #[ORM\ManyToOne(inversedBy: 'Pseudo')]
    private ?PosteAdmin $posteAdmin = null;

    /**
     * @var Collection<int, Ticket>
     */
    #[ORM\OneToMany(targetEntity: Ticket::class, mappedBy: 'staff')]
    private Collection $Staff;

    public function __construct()
    {
        $this->role_ad = new ArrayCollection();
        $this->Staff = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): static
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    

    public function getPosteAdmin(): ?PosteAdmin
    {
        return $this->posteAdmin;
    }

    public function setPosteAdmin(?PosteAdmin $posteAdmin): static
    {
        $this->posteAdmin = $posteAdmin;

        return $this;
    }

    /**
     * @return Collection<int, Ticket>
     */
    public function getStaff(): Collection
    {
        return $this->Staff;
    }

    public function addStaff(Ticket $staff): static
    {
        if (!$this->Staff->contains($staff)) {
            $this->Staff->add($staff);
            $staff->setStaff($this);
        }

        return $this;
    }

    public function removeStaff(Ticket $staff): static
    {
        if ($this->Staff->removeElement($staff)) {
            // set the owning side to null (unless already changed)
            if ($staff->getStaff() === $this) {
                $staff->setStaff(null);
            }
        }

        return $this;
    }
}
