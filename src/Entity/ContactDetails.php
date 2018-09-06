<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactDetailsRepository")
 */
class ContactDetails
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $FullAddress;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Landmark;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SubRegion;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $AcademyPhone1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $AcademyContact1;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $AcademyPhone2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $AcademyContact2;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $ListingEmail;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $ListingWebsite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFullAddress(): ?string
    {
        return $this->FullAddress;
    }

    public function setFullAddress(?string $FullAddress): self
    {
        $this->FullAddress = $FullAddress;

        return $this;
    }

    public function getLandmark(): ?string
    {
        return $this->Landmark;
    }

    public function setLandmark(?string $Landmark): self
    {
        $this->Landmark = $Landmark;

        return $this;
    }

    public function getSubRegion(): ?string
    {
        return $this->SubRegion;
    }

    public function setSubRegion(string $SubRegion): self
    {
        $this->SubRegion = $SubRegion;

        return $this;
    }

    public function getAcademyPhone1(): ?string
    {
        return $this->AcademyPhone1;
    }

    public function setAcademyPhone1(?string $AcademyPhone1): self
    {
        $this->AcademyPhone1 = $AcademyPhone1;

        return $this;
    }

    public function getAcademyContact1(): ?string
    {
        return $this->AcademyContact1;
    }

    public function setAcademyContact1(?string $AcademyContact1): self
    {
        $this->AcademyContact1 = $AcademyContact1;

        return $this;
    }

    public function getAcademyPhone2(): ?string
    {
        return $this->AcademyPhone2;
    }

    public function setAcademyPhone2(?string $AcademyPhone2): self
    {
        $this->AcademyPhone2 = $AcademyPhone2;

        return $this;
    }

    public function getAcademyContact2(): ?string
    {
        return $this->AcademyContact2;
    }

    public function setAcademyContact2(?string $AcademyContact2): self
    {
        $this->AcademyContact2 = $AcademyContact2;

        return $this;
    }

    public function getListingEmail(): ?string
    {
        return $this->ListingEmail;
    }

    public function setListingEmail(?string $ListingEmail): self
    {
        $this->ListingEmail = $ListingEmail;

        return $this;
    }

    public function getListingWebsite(): ?string
    {
        return $this->ListingWebsite;
    }

    public function setListingWebsite(?string $ListingWebsite): self
    {
        $this->ListingWebsite = $ListingWebsite;

        return $this;
    }
}
