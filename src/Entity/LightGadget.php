<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LightGadgetRepository")
 */
class LightGadget
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isOn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $manufacturer;

    /**
     * @ORM\Column(type="float")
     */
    private $watts;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Sistem", inversedBy="lightGadgets")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sistem;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Room", inversedBy="lightGadgets")
     * @ORM\JoinColumn(nullable=false)
     */
    private $room;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsOn(): ?bool
    {
        return $this->isOn;
    }

    public function setIsOn(bool $isOn): self
    {
        $this->isOn = $isOn;

        return $this;
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

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(string $manufacturer): self
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    public function getWatts(): ?float
    {
        return $this->watts;
    }

    public function setWatts(float $watts): self
    {
        $this->watts = $watts;

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
}
