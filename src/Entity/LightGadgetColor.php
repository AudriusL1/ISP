<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LightGadgetColorRepository")
 */
class LightGadgetColor
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
    private $color;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\lightGadget", mappedBy="color")
     */
    private $gadget;

    public function __construct()
    {
        $this->gadget = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return Collection|lightGadget[]
     */
    public function getGadget(): Collection
    {
        return $this->gadget;
    }

    public function addGadget(lightGadget $gadget): self
    {
        if (!$this->gadget->contains($gadget)) {
            $this->gadget[] = $gadget;
            $gadget->setColor($this);
        }

        return $this;
    }

    public function removeGadget(lightGadget $gadget): self
    {
        if ($this->gadget->contains($gadget)) {
            $this->gadget->removeElement($gadget);
            // set the owning side to null (unless already changed)
            if ($gadget->getColor() === $this) {
                $gadget->setColor(null);
            }
        }

        return $this;
    }
}
