<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SistemRepository")
 */
class Sistem
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\user", mappedBy="sistem")
     */
    private $users;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\householdGadget", mappedBy="sistem")
     */
    private $householdGadgets;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\lightGadget", mappedBy="sistem")
     */
    private $lightGadgets;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\safetyGadget", mappedBy="sistem")
     */
    private $safetyGadgets;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\temperatureGadget", mappedBy="sistem")
     */
    private $temperatureGadgets;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\electronicGadget", mappedBy="sistem")
     */
    private $electronicGadgets;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\room", mappedBy="sistem")
     */
    private $rooms;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->householdGadgets = new ArrayCollection();
        $this->lightGadgets = new ArrayCollection();
        $this->safetyGadgets = new ArrayCollection();
        $this->temperatureGadgets = new ArrayCollection();
        $this->electronicGadgets = new ArrayCollection();
        $this->rooms = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|user[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(user $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setSistem($this);
        }

        return $this;
    }

    public function removeUser(user $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            // set the owning side to null (unless already changed)
            if ($user->getSistem() === $this) {
                $user->setSistem(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|householdGadget[]
     */
    public function getHouseholdGadgets(): Collection
    {
        return $this->householdGadgets;
    }

    public function addHouseholdGadget(householdGadget $householdGadget): self
    {
        if (!$this->householdGadgets->contains($householdGadget)) {
            $this->householdGadgets[] = $householdGadget;
            $householdGadget->setSistem($this);
        }

        return $this;
    }

    public function removeHouseholdGadget(householdGadget $householdGadget): self
    {
        if ($this->householdGadgets->contains($householdGadget)) {
            $this->householdGadgets->removeElement($householdGadget);
            // set the owning side to null (unless already changed)
            if ($householdGadget->getSistem() === $this) {
                $householdGadget->setSistem(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|lightGadget[]
     */
    public function getLightGadgets(): Collection
    {
        return $this->lightGadgets;
    }

    public function addLightGadget(lightGadget $lightGadget): self
    {
        if (!$this->lightGadgets->contains($lightGadget)) {
            $this->lightGadgets[] = $lightGadget;
            $lightGadget->setSistem($this);
        }

        return $this;
    }

    public function removeLightGadget(lightGadget $lightGadget): self
    {
        if ($this->lightGadgets->contains($lightGadget)) {
            $this->lightGadgets->removeElement($lightGadget);
            // set the owning side to null (unless already changed)
            if ($lightGadget->getSistem() === $this) {
                $lightGadget->setSistem(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|safetyGadget[]
     */
    public function getSafetyGadgets(): Collection
    {
        return $this->safetyGadgets;
    }

    public function addSafetyGadget(safetyGadget $safetyGadget): self
    {
        if (!$this->safetyGadgets->contains($safetyGadget)) {
            $this->safetyGadgets[] = $safetyGadget;
            $safetyGadget->setSistem($this);
        }

        return $this;
    }

    public function removeSafetyGadget(safetyGadget $safetyGadget): self
    {
        if ($this->safetyGadgets->contains($safetyGadget)) {
            $this->safetyGadgets->removeElement($safetyGadget);
            // set the owning side to null (unless already changed)
            if ($safetyGadget->getSistem() === $this) {
                $safetyGadget->setSistem(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|temperatureGadget[]
     */
    public function getTemperatureGadgets(): Collection
    {
        return $this->temperatureGadgets;
    }

    public function addTemperatureGadget(temperatureGadget $temperatureGadget): self
    {
        if (!$this->temperatureGadgets->contains($temperatureGadget)) {
            $this->temperatureGadgets[] = $temperatureGadget;
            $temperatureGadget->setSistem($this);
        }

        return $this;
    }

    public function removeTemperatureGadget(temperatureGadget $temperatureGadget): self
    {
        if ($this->temperatureGadgets->contains($temperatureGadget)) {
            $this->temperatureGadgets->removeElement($temperatureGadget);
            // set the owning side to null (unless already changed)
            if ($temperatureGadget->getSistem() === $this) {
                $temperatureGadget->setSistem(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|electronicGadget[]
     */
    public function getElectronicGadgets(): Collection
    {
        return $this->electronicGadgets;
    }

    public function addElectronicGadget(electronicGadget $electronicGadget): self
    {
        if (!$this->electronicGadgets->contains($electronicGadget)) {
            $this->electronicGadgets[] = $electronicGadget;
            $electronicGadget->setSistem($this);
        }

        return $this;
    }

    public function removeElectronicGadget(electronicGadget $electronicGadget): self
    {
        if ($this->electronicGadgets->contains($electronicGadget)) {
            $this->electronicGadgets->removeElement($electronicGadget);
            // set the owning side to null (unless already changed)
            if ($electronicGadget->getSistem() === $this) {
                $electronicGadget->setSistem(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|room[]
     */
    public function getRooms(): Collection
    {
        return $this->rooms;
    }

    public function addRoom(room $room): self
    {
        if (!$this->rooms->contains($room)) {
            $this->rooms[] = $room;
            $room->setSistem($this);
        }

        return $this;
    }

    public function removeRoom(room $room): self
    {
        if ($this->rooms->contains($room)) {
            $this->rooms->removeElement($room);
            // set the owning side to null (unless already changed)
            if ($room->getSistem() === $this) {
                $room->setSistem(null);
            }
        }

        return $this;
    }
}
