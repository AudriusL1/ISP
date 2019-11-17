<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SafetyGadgetRepository")
 */
class SafetyGadget
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
     * @ORM\Column(type="boolean")
     */
    private $isActive;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $manufacturer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $model;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Sistem", inversedBy="safetyGadgets")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sistem;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Room", inversedBy="safetyGadgets")
     * @ORM\JoinColumn(nullable=false)
     */
    private $room;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\alert", mappedBy="gadget")
     */
    private $alerts;

    public function __construct()
    {
        $this->alerts = new ArrayCollection();
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

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(string $manufacturer): self
    {
        $this->manufacturer = $manufacturer;

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

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

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

    public function getRoom(): ?Room
    {
        return $this->room;
    }

    public function setRoom(?Room $room): self
    {
        $this->room = $room;

        return $this;
    }

    /**
     * @return Collection|alert[]
     */
    public function getAlerts(): Collection
    {
        return $this->alerts;
    }

    public function addAlert(alert $alert): self
    {
        if (!$this->alerts->contains($alert)) {
            $this->alerts[] = $alert;
            $alert->setGadget($this);
        }

        return $this;
    }

    public function removeAlert(alert $alert): self
    {
        if ($this->alerts->contains($alert)) {
            $this->alerts->removeElement($alert);
            // set the owning side to null (unless already changed)
            if ($alert->getGadget() === $this) {
                $alert->setGadget(null);
            }
        }

        return $this;
    }
}
