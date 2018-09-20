<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AmenitiesRepository")
 */
class Amenities
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Academy", mappedBy="amenities")
     */
    private $AcademyId;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $PotableWater;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $MedicalAid;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ParkingFacility;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $SportShopNearBy;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Gym;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ChangingRoomsLockers", inversedBy="AmenitiesId")
     * @ORM\JoinColumn(nullable=false)
     */
    private $changingRoomsLockers;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\WashRoom", inversedBy="AmenitiesId")
     */
    private $washRoom;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ShowerRoom", inversedBy="AmenititesId")
     */
    private $showerRoom;

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
            $academyId->setAmenities($this);
        }

        return $this;
    }

    public function removeAcademyId(Academy $academyId): self
    {
        if ($this->AcademyId->contains($academyId)) {
            $this->AcademyId->removeElement($academyId);
            // set the owning side to null (unless already changed)
            if ($academyId->getAmenities() === $this) {
                $academyId->setAmenities(null);
            }
        }

        return $this;
    }

    public function getPotableWater(): ?bool
    {
        return $this->PotableWater;
    }

    public function setPotableWater(?bool $PotableWater): self
    {
        $this->PotableWater = $PotableWater;

        return $this;
    }

    public function getMedicalAid(): ?bool
    {
        return $this->MedicalAid;
    }

    public function setMedicalAid(?bool $MedicalAid): self
    {
        $this->MedicalAid = $MedicalAid;

        return $this;
    }

    public function getParkingFacility(): ?bool
    {
        return $this->ParkingFacility;
    }

    public function setParkingFacility(?bool $ParkingFacility): self
    {
        $this->ParkingFacility = $ParkingFacility;

        return $this;
    }

    public function getSportShopNearBy(): ?bool
    {
        return $this->SportShopNearBy;
    }

    public function setSportShopNearBy(?bool $SportShopNearBy): self
    {
        $this->SportShopNearBy = $SportShopNearBy;

        return $this;
    }

    public function getGym(): ?bool
    {
        return $this->Gym;
    }

    public function setGym(?bool $Gym): self
    {
        $this->Gym = $Gym;

        return $this;
    }

    public function getChangingRoomsLockers(): ?ChangingRoomsLockers
    {
        return $this->changingRoomsLockers;
    }

    public function setChangingRoomsLockers(?ChangingRoomsLockers $changingRoomsLockers): self
    {
        $this->changingRoomsLockers = $changingRoomsLockers;

        return $this;
    }

    public function getWashRoom(): ?WashRoom
    {
        return $this->washRoom;
    }

    public function setWashRoom(?WashRoom $washRoom): self
    {
        $this->washRoom = $washRoom;

        return $this;
    }

    public function getShowerRoom(): ?ShowerRoom
    {
        return $this->showerRoom;
    }

    public function setShowerRoom(?ShowerRoom $showerRoom): self
    {
        $this->showerRoom = $showerRoom;

        return $this;
    }
}
