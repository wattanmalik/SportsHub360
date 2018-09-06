<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CitiesRepository")
 */
class Cities
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $CityName;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CitiesRegion", mappedBy="Region", orphanRemoval=true)
     */
    private $citiesRegions;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Academy", inversedBy="City")
     * @ORM\JoinColumn(nullable=false)
     */
    private $academy;

    public function __construct()
    {
        $this->citiesRegions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCityName(): ?string
    {
        return $this->CityName;
    }

    public function setCityName(string $CityName): self
    {
        $this->CityName = $CityName;

        return $this;
    }

    /**
     * @return Collection|CitiesRegion[]
     */
    public function getCitiesRegions(): Collection
    {
        return $this->citiesRegions;
    }

    public function addCitiesRegion(CitiesRegion $citiesRegion): self
    {
        if (!$this->citiesRegions->contains($citiesRegion)) {
            $this->citiesRegions[] = $citiesRegion;
            $citiesRegion->setRegion($this);
        }

        return $this;
    }

    public function removeCitiesRegion(CitiesRegion $citiesRegion): self
    {
        if ($this->citiesRegions->contains($citiesRegion)) {
            $this->citiesRegions->removeElement($citiesRegion);
            // set the owning side to null (unless already changed)
            if ($citiesRegion->getRegion() === $this) {
                $citiesRegion->setRegion(null);
            }
        }

        return $this;
    }

    public function getAcademy(): ?Academy
    {
        return $this->academy;
    }

    public function setAcademy(?Academy $academy): self
    {
        $this->academy = $academy;

        return $this;
    }
}
