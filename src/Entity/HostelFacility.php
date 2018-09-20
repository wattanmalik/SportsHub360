<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HostelFacilityRepository")
 */
class HostelFacility
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Academy", mappedBy="hostelFacility")
     */
    private $AcademyId;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $HostelFacilities;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $FacilityType;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $AttachedWashroom;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $ConditionOfAmenity;

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
            $academyId->setHostelFacility($this);
        }

        return $this;
    }

    public function removeAcademyId(Academy $academyId): self
    {
        if ($this->AcademyId->contains($academyId)) {
            $this->AcademyId->removeElement($academyId);
            // set the owning side to null (unless already changed)
            if ($academyId->getHostelFacility() === $this) {
                $academyId->setHostelFacility(null);
            }
        }

        return $this;
    }

    public function getHostelFacilities(): ?string
    {
        return $this->HostelFacilities;
    }

    public function setHostelFacilities(?string $HostelFacilities): self
    {
        $this->HostelFacilities = $HostelFacilities;

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

    public function getAttachedWashroom(): ?bool
    {
        return $this->AttachedWashroom;
    }

    public function setAttachedWashroom(?bool $AttachedWashroom): self
    {
        $this->AttachedWashroom = $AttachedWashroom;

        return $this;
    }

    public function getConditionOfAmenity(): ?string
    {
        return $this->ConditionOfAmenity;
    }

    public function setConditionOfAmenity(?string $ConditionOfAmenity): self
    {
        $this->ConditionOfAmenity = $ConditionOfAmenity;

        return $this;
    }
}
