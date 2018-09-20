<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WashRoomRepository")
 */
class WashRoom
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $WashRoomType;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $WashRoomExists;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $ConditionOfAmenity;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Amenities", mappedBy="washRoom")
     */
    private $AmenitiesId;

    public function __construct()
    {
        $this->AmenitiesId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWashRoomType(): ?string
    {
        return $this->WashRoomType;
    }

    public function setWashRoomType(?string $WashRoomType): self
    {
        $this->WashRoomType = $WashRoomType;

        return $this;
    }

    public function getWashRoomExists(): ?bool
    {
        return $this->WashRoomExists;
    }

    public function setWashRoomExists(?bool $WashRoomExists): self
    {
        $this->WashRoomExists = $WashRoomExists;

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

    /**
     * @return Collection|Amenities[]
     */
    public function getAmenitiesId(): Collection
    {
        return $this->AmenitiesId;
    }

    public function addAmenitiesId(Amenities $amenitiesId): self
    {
        if (!$this->AmenitiesId->contains($amenitiesId)) {
            $this->AmenitiesId[] = $amenitiesId;
            $amenitiesId->setWashRoom($this);
        }

        return $this;
    }

    public function removeAmenitiesId(Amenities $amenitiesId): self
    {
        if ($this->AmenitiesId->contains($amenitiesId)) {
            $this->AmenitiesId->removeElement($amenitiesId);
            // set the owning side to null (unless already changed)
            if ($amenitiesId->getWashRoom() === $this) {
                $amenitiesId->setWashRoom(null);
            }
        }

        return $this;
    }
}
