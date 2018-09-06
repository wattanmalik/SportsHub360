<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SportsRepository")
 */
class Sports
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
    private $SportName;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Academy", mappedBy="SportsId")
     */
    private $academies;

    public function __construct()
    {
        $this->academies = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSportName(): ?string
    {
        return $this->SportName;
    }

    public function setSportName(string $SportName): self
    {
        $this->SportName = $SportName;

        return $this;
    }

    /**
     * @return Collection|Academy[]
     */
    public function getAcademies(): Collection
    {
        return $this->academies;
    }

    public function addAcademy(Academy $academy): self
    {
        if (!$this->academies->contains($academy)) {
            $this->academies[] = $academy;
            $academy->addSportsId($this);
        }

        return $this;
    }

    public function removeAcademy(Academy $academy): self
    {
        if ($this->academies->contains($academy)) {
            $this->academies->removeElement($academy);
            $academy->removeSportsId($this);
        }

        return $this;
    }
}
