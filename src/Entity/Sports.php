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
    private $sportname;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Academy", mappedBy="sports")
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

    public function getSportname(): ?string
    {
        return $this->sportname;
    }

    public function setSportname(string $sportname): self
    {
        $this->sportname = $sportname;

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
            $academy->setSports($this);
        }

        return $this;
    }

    public function removeAcademy(Academy $academy): self
    {
        if ($this->academies->contains($academy)) {
            $this->academies->removeElement($academy);
            // set the owning side to null (unless already changed)
            if ($academy->getSports() === $this) {
                $academy->setSports(null);
            }
        }

        return $this;
    }
}
