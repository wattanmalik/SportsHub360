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

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $FacebookUrl;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $TwitterUrl;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $LinkedInUrl;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Sports", inversedBy="academiesOtherSports")
     */
    private $OtherSports;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\OpeningHours", inversedBy="AcademyId")
     */
    private $openingHours;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Gallery", inversedBy="AcademyId")
     */
    private $gallery;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Facilities", inversedBy="AcademyId")
     */
    private $facilities;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Amenities", inversedBy="AcademyId")
     * @ORM\JoinColumn(nullable=false)
     */
    private $amenities;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\HostelFacility", inversedBy="AcademyId")
     */
    private $hostelFacility;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ParentsWaitingArea;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $ConditionOfParentsWaitingArea;

    /**
     * @ORM\Column(type="smallint")
     */
    private $AgeGroupMinimum;

    /**
     * @ORM\Column(type="smallint")
     */
    private $AgeGroupMaximum;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\StaffDetails", mappedBy="AcademyId", cascade={"persist", "remove"})
     */
    private $staffDetails;

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

    public function getFacebookUrl(): ?string
    {
        return $this->FacebookUrl;
    }

    public function setFacebookUrl(?string $FacebookUrl): self
    {
        $this->FacebookUrl = $FacebookUrl;

        return $this;
    }

    public function getTwitterUrl(): ?string
    {
        return $this->TwitterUrl;
    }

    public function setTwitterUrl(?string $TwitterUrl): self
    {
        $this->TwitterUrl = $TwitterUrl;

        return $this;
    }

    public function getLinkedInUrl(): ?string
    {
        return $this->LinkedInUrl;
    }

    public function setLinkedInUrl(?string $LinkedInUrl): self
    {
        $this->LinkedInUrl = $LinkedInUrl;

        return $this;
    }

    public function getOtherSports(): ?Sports
    {
        return $this->OtherSports;
    }

    public function setOtherSports(?Sports $OtherSports): self
    {
        $this->OtherSports = $OtherSports;

        return $this;
    }

    public function getOpeningHours(): ?OpeningHours
    {
        return $this->openingHours;
    }

    public function setOpeningHours(?OpeningHours $openingHours): self
    {
        $this->openingHours = $openingHours;

        return $this;
    }

    public function getGallery(): ?Gallery
    {
        return $this->gallery;
    }

    public function setGallery(?Gallery $gallery): self
    {
        $this->gallery = $gallery;

        return $this;
    }

    public function getFacilities(): ?Facilities
    {
        return $this->facilities;
    }

    public function setFacilities(?Facilities $facilities): self
    {
        $this->facilities = $facilities;

        return $this;
    }

    public function getAmenities(): ?Amenities
    {
        return $this->amenities;
    }

    public function setAmenities(?Amenities $amenities): self
    {
        $this->amenities = $amenities;

        return $this;
    }

    public function getHostelFacility(): ?HostelFacility
    {
        return $this->hostelFacility;
    }

    public function setHostelFacility(?HostelFacility $hostelFacility): self
    {
        $this->hostelFacility = $hostelFacility;

        return $this;
    }

    public function getParentsWaitingArea(): ?bool
    {
        return $this->ParentsWaitingArea;
    }

    public function setParentsWaitingArea(?bool $ParentsWaitingArea): self
    {
        $this->ParentsWaitingArea = $ParentsWaitingArea;

        return $this;
    }

    public function getConditionOfParentsWaitingArea(): ?string
    {
        return $this->ConditionOfParentsWaitingArea;
    }

    public function setConditionOfParentsWaitingArea(?string $ConditionOfParentsWaitingArea): self
    {
        $this->ConditionOfParentsWaitingArea = $ConditionOfParentsWaitingArea;

        return $this;
    }

    public function getAgeGroupMinimum(): ?int
    {
        return $this->AgeGroupMinimum;
    }

    public function setAgeGroupMinimum(int $AgeGroupMinimum): self
    {
        $this->AgeGroupMinimum = $AgeGroupMinimum;

        return $this;
    }

    public function getAgeGroupMaximum(): ?int
    {
        return $this->AgeGroupMaximum;
    }

    public function setAgeGroupMaximum(int $AgeGroupMaximum): self
    {
        $this->AgeGroupMaximum = $AgeGroupMaximum;

        return $this;
    }

    public function getStaffDetails(): ?StaffDetails
    {
        return $this->staffDetails;
    }

    public function setStaffDetails(StaffDetails $staffDetails): self
    {
        $this->staffDetails = $staffDetails;

        // set the owning side of the relation if necessary
        if ($this !== $staffDetails->getAcademyId()) {
            $staffDetails->setAcademyId($this);
        }

        return $this;
    }
}
