<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ElectronicGadgetRepository")
 */
class ElectronicGadget
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
     * @ORM\Column(type="string", length=255)
     */
    private $originCountry;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $model;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isOn;

    /**
     * @ORM\Column(type="integer")
     */
    private $bateryLevel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $manufacturer;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Sistem", inversedBy="electronicGadgets")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sistem;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Room", inversedBy="electronicGadgets")
     * @ORM\JoinColumn(nullable=false)
     */
    private $room;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\GadgetGroup", inversedBy="elGadgets")
     */
    private $gadgetGroup;

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

    public function getOriginCountry(): ?string
    {
        return $this->originCountry;
    }

    public function setOriginCountry(string $originCountry): self
    {
        $this->originCountry = $originCountry;

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

    public function getIsOn(): ?bool
    {
        return $this->isOn;
    }

    public function setIsOn(bool $isOn): self
    {
        $this->isOn = $isOn;

        return $this;
    }

    public function getBateryLevel(): ?int
    {
        return $this->bateryLevel;
    }

    public function setBateryLevel(int $bateryLevel): self
    {
        $this->bateryLevel = $bateryLevel;

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

    public function getGadgetGroup(): ?GadgetGroup
    {
        return $this->gadgetGroup;
    }

    public function setGadgetGroup(?GadgetGroup $gadgetGroup): self
    {
        $this->gadgetGroup = $gadgetGroup;

        return $this;
    }
}
