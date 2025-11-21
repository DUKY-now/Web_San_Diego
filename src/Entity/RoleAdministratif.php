<?php

namespace App\Entity;

use App\Repository\RoleAdministratifRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RoleAdministratifRepository::class)]
class RoleAdministratif
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Role = null;

    /**
     * @var Collection<int, Staffs>
     */
    #[ORM\OneToMany(targetEntity: Staffs::class, mappedBy: 'role_admin')]
    private Collection $admin;

    public function __construct()
    {
        $this->admin = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRole(): ?string
    {
        return $this->Role;
    }

    public function setRole(string $Role): static
    {
        $this->Role = $Role;

        return $this;
    }

    /**
     * @return Collection<int, Staffs>
     */
    public function getAdmin(): Collection
    {
        return $this->admin;
    }

    public function addAdmin(Staffs $admin): static
    {
        if (!$this->admin->contains($admin)) {
            $this->admin->add($admin);
            $admin->setRoleAdmin($this);
        }

        return $this;
    }

    public function removeAdmin(Staffs $admin): static
    {
        if ($this->admin->removeElement($admin)) {
            // set the owning side to null (unless already changed)
            if ($admin->getRoleAdmin() === $this) {
                $admin->setRoleAdmin(null);
            }
        }

        return $this;
    }
}
