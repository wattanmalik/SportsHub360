<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ShowerRoomRepository")
 */
class ShowerRoom
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Amenities", mappedBy="showerRoom")
     */
    private $AmenititesId;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $ShowerRoomType;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ShowerRoomExists;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $ConditionOfAmenities;

    public function __construct()
    {
        $this->AmenititesId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Amenities[]
     */
    public function getAmenititesId(): Collection
    {
        return $this->AmenititesId;
    }

    public function addAmenititesId(Amenities $amenititesId): self
    {
        if (!$this->AmenititesId->contains($amenititesId)) {
            $this->AmenititesId[] = $amenititesId;
            $amenititesId->setShowerRoom($this);
        }

        return $this;
    }

    public function removeAmenititesId(Amenities $amenititesId): self
    {
        if ($this->AmenititesId->contains($amenititesId)) {
            $this->AmenititesId->removeElement($amenititesId);
            // set the owning side to null (unless already changed)
            if ($amenititesId->getShowerRoom() === $this) {
                $amenititesId->setShowerRoom(null);
            }
        }

        return $this;
    }

    public function getShowerRoomType(): ?string
    {
        return $this->ShowerRoomType;
    }

    public function setShowerRoomType(?string $ShowerRoomType): self
    {
        $this->ShowerRoomType = $ShowerRoomType;

        return $this;
    }

    public function getShowerRoomExists(): ?bool
    {
        return $this->ShowerRoomExists;
    }

    public function setShowerRoomExists(?bool $ShowerRoomExists): self
    {
        $this->ShowerRoomExists = $ShowerRoomExists;

        return $this;
    }

    public function getConditionOfAmenities(): ?string
    {
        return $this->ConditionOfAmenities;
    }

    public function setConditionOfAmenities(?string $ConditionOfAmenities): self
    {
        $this->ConditionOfAmenities = $ConditionOfAmenities;

        return $this;
    }
}
