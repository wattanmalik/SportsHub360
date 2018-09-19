<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FacilitiesRepository")
 */
class Facilities
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Academy", mappedBy="facilities")
     */
    private $AcademyId;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $FieldOrGroundName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $FacilityType;

    /**
     * @ORM\Column(type="smallint")
     */
    private $NumberOfFacility;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $ConditionOfFacility;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $FloodLights;

    public function __construct()
    {
        $this->AcademyId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Academy[]
     */
    public function getAcademyId(): Collection
    {
        return $this->AcademyId;
    }

    public function addAcademyId(Academy $academyId): self
    {
        if (!$this->AcademyId->contains($academyId)) {
            $this->AcademyId[] = $academyId;
            $academyId->setFacilities($this);
        }

        return $this;
    }

    public function removeAcademyId(Academy $academyId): self
    {
        if ($this->AcademyId->contains($academyId)) {
            $this->AcademyId->removeElement($academyId);
            // set the owning side to null (unless already changed)
            if ($academyId->getFacilities() === $this) {
                $academyId->setFacilities(null);
            }
        }

        return $this;
    }

    public function getFieldOrGroundName(): ?string
    {
        return $this->FieldOrGroundName;
    }

    public function setFieldOrGroundName(string $FieldOrGroundName): self
    {
        $this->FieldOrGroundName = $FieldOrGroundName;

        return $this;
    }

    public function getFacilityType(): ?string
    {
        return $this->FacilityType;
    }

    public function setFacilityType(string $FacilityType): self
    {
        $this->FacilityType = $FacilityType;

        return $this;
    }

    public function getNumberOfFacility(): ?int
    {
        return $this->NumberOfFacility;
    }

    public function setNumberOfFacility(int $NumberOfFacility): self
    {
        $this->NumberOfFacility = $NumberOfFacility;

        return $this;
    }

    public function getConditionOfFacility(): ?string
    {
        return $this->ConditionOfFacility;
    }

    public function setConditionOfFacility(?string $ConditionOfFacility): self
    {
        $this->ConditionOfFacility = $ConditionOfFacility;

        return $this;
    }

    public function getFloodLights(): ?bool
    {
        return $this->FloodLights;
    }

    public function setFloodLights(?bool $FloodLights): self
    {
        $this->FloodLights = $FloodLights;

        return $this;
    }
}
