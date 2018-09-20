<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ChangingRoomsLockersRepository")
 */
class ChangingRoomsLockers
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Amenities", mappedBy="changingRoomsLockers")
     */
    private $AmenitiesId;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $LockerRoomType;

    /**
     * @ORM\Column(type="boolean")
     */
    private $LockerRoomExists;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $ConditionOfAmenity;

    public function __construct()
    {
        $this->AmenitiesId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
            $amenitiesId->setChangingRoomsLockers($this);
        }

        return $this;
    }

    public function removeAmenitiesId(Amenities $amenitiesId): self
    {
        if ($this->AmenitiesId->contains($amenitiesId)) {
            $this->AmenitiesId->removeElement($amenitiesId);
            // set the owning side to null (unless already changed)
            if ($amenitiesId->getChangingRoomsLockers() === $this) {
                $amenitiesId->setChangingRoomsLockers(null);
            }
        }

        return $this;
    }

    public function getLockerRoomType(): ?string
    {
        return $this->LockerRoomType;
    }

    public function setLockerRoomType(string $LockerRoomType): self
    {
        $this->LockerRoomType = $LockerRoomType;

        return $this;
    }

    public function getLockerRoomExists(): ?bool
    {
        return $this->LockerRoomExists;
    }

    public function setLockerRoomExists(bool $LockerRoomExists): self
    {
        $this->LockerRoomExists = $LockerRoomExists;

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
