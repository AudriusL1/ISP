<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GadgetGroupRepository")
 */
class GadgetGroup
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
     * @ORM\OneToMany(targetEntity="App\Entity\electronicGadget", mappedBy="gadgetGroup")
     */
    private $elGadgets;

    public function __construct()
    {
        $this->elGadgets = new ArrayCollection();
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
     * @return Collection|electronicGadget[]
     */
    public function getElGadgets(): Collection
    {
        return $this->elGadgets;
    }

    public function addElGadget(electronicGadget $elGadget): self
    {
        if (!$this->elGadgets->contains($elGadget)) {
            $this->elGadgets[] = $elGadget;
            $elGadget->setGadgetGroup($this);
        }

        return $this;
    }

    public function removeElGadget(electronicGadget $elGadget): self
    {
        if ($this->elGadgets->contains($elGadget)) {
            $this->elGadgets->removeElement($elGadget);
            // set the owning side to null (unless already changed)
            if ($elGadget->getGadgetGroup() === $this) {
                $elGadget->setGadgetGroup(null);
            }
        }

        return $this;
    }
}
