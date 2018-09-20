<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TournamentsRepository")
 */
class Tournaments
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Academy", mappedBy="tournaments")
     */
    private $AcademyId;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Name;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $Year;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $Position;

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
            $academyId->setTournaments($this);
        }

        return $this;
    }

    public function removeAcademyId(Academy $academyId): self
    {
        if ($this->AcademyId->contains($academyId)) {
            $this->AcademyId->removeElement($academyId);
            // set the owning side to null (unless already changed)
            if ($academyId->getTournaments() === $this) {
                $academyId->setTournaments(null);
            }
        }

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(?string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getYear(): ?\DateTimeInterface
    {
        return $this->Year;
    }

    public function setYear(?\DateTimeInterface $Year): self
    {
        $this->Year = $Year;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->Position;
    }

    public function setPosition(?string $Position): self
    {
        $this->Position = $Position;

        return $this;
    }
}
