<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FeeStructuresRepository")
 */
class FeeStructures
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Academy", inversedBy="feeStructures")
     */
    private $AcademyId;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $LevelOfUser;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $Monthly;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $Quarterly;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $HalfYearly;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $Yearly;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAcademyId(): ?Academy
    {
        return $this->AcademyId;
    }

    public function setAcademyId(?Academy $AcademyId): self
    {
        $this->AcademyId = $AcademyId;

        return $this;
    }

    public function getLevelOfUser(): ?string
    {
        return $this->LevelOfUser;
    }

    public function setLevelOfUser(?string $LevelOfUser): self
    {
        $this->LevelOfUser = $LevelOfUser;

        return $this;
    }

    public function getMonthly(): ?string
    {
        return $this->Monthly;
    }

    public function setMonthly(?string $Monthly): self
    {
        $this->Monthly = $Monthly;

        return $this;
    }

    public function getQuarterly(): ?string
    {
        return $this->Quarterly;
    }

    public function setQuarterly(?string $Quarterly): self
    {
        $this->Quarterly = $Quarterly;

        return $this;
    }

    public function getHalfYearly(): ?string
    {
        return $this->HalfYearly;
    }

    public function setHalfYearly(?string $HalfYearly): self
    {
        $this->HalfYearly = $HalfYearly;

        return $this;
    }

    public function getYearly(): ?string
    {
        return $this->Yearly;
    }

    public function setYearly(?string $Yearly): self
    {
        $this->Yearly = $Yearly;

        return $this;
    }
}
