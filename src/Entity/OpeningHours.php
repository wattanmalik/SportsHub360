<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OpeningHoursRepository")
 */
class OpeningHours
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Academy", mappedBy="openingHours")
     */
    private $AcademyId;

    /**
     * @ORM\Column(type="binary", nullable=true)
     */
    private $OpenOrClose;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $OpenAt;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $CloseAt;

    /**
     * @ORM\Column(type="string", length=12)
     */
    private $OpeningDay;

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
            $academyId->setOpeningHours($this);
        }

        return $this;
    }

    public function removeAcademyId(Academy $academyId): self
    {
        if ($this->AcademyId->contains($academyId)) {
            $this->AcademyId->removeElement($academyId);
            // set the owning side to null (unless already changed)
            if ($academyId->getOpeningHours() === $this) {
                $academyId->setOpeningHours(null);
            }
        }

        return $this;
    }

    public function getOpenOrClose()
    {
        return $this->OpenOrClose;
    }

    public function setOpenOrClose($OpenOrClose): self
    {
        $this->OpenOrClose = $OpenOrClose;

        return $this;
    }

    public function getOpenAt(): ?\DateTimeInterface
    {
        return $this->OpenAt;
    }

    public function setOpenAt(?\DateTimeInterface $OpenAt): self
    {
        $this->OpenAt = $OpenAt;

        return $this;
    }

    public function getCloseAt(): ?\DateTimeInterface
    {
        return $this->CloseAt;
    }

    public function setCloseAt(?\DateTimeInterface $CloseAt): self
    {
        $this->CloseAt = $CloseAt;

        return $this;
    }

    public function getOpeningDay(): ?string
    {
        return $this->OpeningDay;
    }

    public function setOpeningDay(string $OpeningDay): self
    {
        $this->OpeningDay = $OpeningDay;

        return $this;
    }
}
