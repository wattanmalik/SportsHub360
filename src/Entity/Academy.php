<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AcademyRepository")
 */
class Academy
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
    private $AcademyName;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Sports", inversedBy="academies")
     */
    private $SportsId;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Cities", mappedBy="academy")
     */
    private $City;

    /**
     * @ORM\Column(type="text")
     */
    private $Description;

    public function __construct()
    {
        $this->SportsId = new ArrayCollection();
        $this->City = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAcademyName(): ?string
    {
        return $this->AcademyName;
    }

    public function setAcademyName(string $AcademyName): self
    {
        $this->AcademyName = $AcademyName;

        return $this;
    }

    /**
     * @return Collection|Sports[]
     */
    public function getSportsId(): Collection
    {
        return $this->SportsId;
    }

    public function addSportsId(Sports $sportsId): self
    {
        if (!$this->SportsId->contains($sportsId)) {
            $this->SportsId[] = $sportsId;
        }

        return $this;
    }

    public function removeSportsId(Sports $sportsId): self
    {
        if ($this->SportsId->contains($sportsId)) {
            $this->SportsId->removeElement($sportsId);
        }

        return $this;
    }

    /**
     * @return Collection|Cities[]
     */
    public function getCity(): Collection
    {
        return $this->City;
    }

    public function addCity(Cities $city): self
    {
        if (!$this->City->contains($city)) {
            $this->City[] = $city;
            $city->setAcademy($this);
        }

        return $this;
    }

    public function removeCity(Cities $city): self
    {
        if ($this->City->contains($city)) {
            $this->City->removeElement($city);
            // set the owning side to null (unless already changed)
            if ($city->getAcademy() === $this) {
                $city->setAcademy(null);
            }
        }

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }
}
