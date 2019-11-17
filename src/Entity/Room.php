<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RoomRepository")
 */
class Room
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
     * @ORM\Column(type="float")
     */
    private $size;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Sistem", inversedBy="rooms")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sistem;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\householdGadget", mappedBy="room")
     */
    private $householdGadgets;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\electronicGadget", mappedBy="room")
     */
    private $electronicGadgets;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\temperatureGadget", mappedBy="room")
     */
    private $temperatureGadgets;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\safetyGadget", mappedBy="room")
     */
    private $safetyGadgets;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\lightGadget", mappedBy="room")
     */
    private $lightGadgets;

    public function __construct()
    {
        $this->householdGadgets = new ArrayCollection();
        $this->electronicGadgets = new ArrayCollection();
        $this->temperatureGadgets = new ArrayCollection();
        $this->safetyGadgets = new ArrayCollection();
        $this->lightGadgets = new ArrayCollection();
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

    public function getSize(): ?float
    {
        return $this->size;
    }

    public function setSize(float $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getSistem(): ?Sistem
    {
        return $this->sistem;
    }

    public function setSistem(?Sistem $sistem): self
    {
        $this->sistem = $sistem;

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
            $householdGadget->setRoom($this);
        }

        return $this;
    }

    public function removeHouseholdGadget(householdGadget $householdGadget): self
    {
        if ($this->householdGadgets->contains($householdGadget)) {
            $this->householdGadgets->removeElement($householdGadget);
            // set the owning side to null (unless already changed)
            if ($householdGadget->getRoom() === $this) {
                $householdGadget->setRoom(null);
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
            $electronicGadget->setRoom($this);
        }

        return $this;
    }

    public function removeElectronicGadget(electronicGadget $electronicGadget): self
    {
        if ($this->electronicGadgets->contains($electronicGadget)) {
            $this->electronicGadgets->removeElement($electronicGadget);
            // set the owning side to null (unless already changed)
            if ($electronicGadget->getRoom() === $this) {
                $electronicGadget->setRoom(null);
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
            $temperatureGadget->setRoom($this);
        }

        return $this;
    }

    public function removeTemperatureGadget(temperatureGadget $temperatureGadget): self
    {
        if ($this->temperatureGadgets->contains($temperatureGadget)) {
            $this->temperatureGadgets->removeElement($temperatureGadget);
            // set the owning side to null (unless already changed)
            if ($temperatureGadget->getRoom() === $this) {
                $temperatureGadget->setRoom(null);
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
            $safetyGadget->setRoom($this);
        }

        return $this;
    }

    public function removeSafetyGadget(safetyGadget $safetyGadget): self
    {
        if ($this->safetyGadgets->contains($safetyGadget)) {
            $this->safetyGadgets->removeElement($safetyGadget);
            // set the owning side to null (unless already changed)
            if ($safetyGadget->getRoom() === $this) {
                $safetyGadget->setRoom(null);
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
            $lightGadget->setRoom($this);
        }

        return $this;
    }

    public function removeLightGadget(lightGadget $lightGadget): self
    {
        if ($this->lightGadgets->contains($lightGadget)) {
            $this->lightGadgets->removeElement($lightGadget);
            // set the owning side to null (unless already changed)
            if ($lightGadget->getRoom() === $this) {
                $lightGadget->setRoom(null);
            }
        }

        return $this;
    }
}
