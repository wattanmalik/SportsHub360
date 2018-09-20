<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StaffDetailsRepository")
 */
class StaffDetails
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Academy", inversedBy="staffDetails", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $AcademyId;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $NameOfHeadCoach;

    /**
     * @ORM\Column(type="integer")
     */
    private $Experience;

    /**
     * @ORM\Column(type="integer")
     */
    private $TotalNumberOfCoaches;

    /**
     * @ORM\Column(type="boolean")
     */
    private $SupportStaff;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $HeadCoachDescription;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAcademyId(): ?Academy
    {
        return $this->AcademyId;
    }

    public function setAcademyId(Academy $AcademyId): self
    {
        $this->AcademyId = $AcademyId;

        return $this;
    }

    public function getNameOfHeadCoach(): ?string
    {
        return $this->NameOfHeadCoach;
    }

    public function setNameOfHeadCoach(string $NameOfHeadCoach): self
    {
        $this->NameOfHeadCoach = $NameOfHeadCoach;

        return $this;
    }

    public function getExperience(): ?int
    {
        return $this->Experience;
    }

    public function setExperience(int $Experience): self
    {
        $this->Experience = $Experience;

        return $this;
    }

    public function getTotalNumberOfCoaches(): ?int
    {
        return $this->TotalNumberOfCoaches;
    }

    public function setTotalNumberOfCoaches(int $TotalNumberOfCoaches): self
    {
        $this->TotalNumberOfCoaches = $TotalNumberOfCoaches;

        return $this;
    }

    public function getSupportStaff(): ?bool
    {
        return $this->SupportStaff;
    }

    public function setSupportStaff(bool $SupportStaff): self
    {
        $this->SupportStaff = $SupportStaff;

        return $this;
    }

    public function getHeadCoachDescription(): ?string
    {
        return $this->HeadCoachDescription;
    }

    public function setHeadCoachDescription(?string $HeadCoachDescription): self
    {
        $this->HeadCoachDescription = $HeadCoachDescription;

        return $this;
    }
}
