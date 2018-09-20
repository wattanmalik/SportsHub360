<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AchievementsRepository")
 */
class Achievements
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Academy", mappedBy="achievements")
     */
    private $AcademyId;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $AchievementDescription;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Academy", mappedBy="achievementsId")
     */
    private $academies;

    public function __construct()
    {
        $this->AcademyId = new ArrayCollection();
        $this->academies = new ArrayCollection();
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
            $academyId->setAchievements($this);
        }

        return $this;
    }

    public function removeAcademyId(Academy $academyId): self
    {
        if ($this->AcademyId->contains($academyId)) {
            $this->AcademyId->removeElement($academyId);
            // set the owning side to null (unless already changed)
            if ($academyId->getAchievements() === $this) {
                $academyId->setAchievements(null);
            }
        }

        return $this;
    }

    public function getAchievementDescription(): ?string
    {
        return $this->AchievementDescription;
    }

    public function setAchievementDescription(?string $AchievementDescription): self
    {
        $this->AchievementDescription = $AchievementDescription;

        return $this;
    }

    /**
     * @return Collection|Academy[]
     */
    public function getAcademies(): Collection
    {
        return $this->academies;
    }

    public function addAcademy(Academy $academy): self
    {
        if (!$this->academies->contains($academy)) {
            $this->academies[] = $academy;
            $academy->setAchievementsId($this);
        }

        return $this;
    }

    public function removeAcademy(Academy $academy): self
    {
        if ($this->academies->contains($academy)) {
            $this->academies->removeElement($academy);
            // set the owning side to null (unless already changed)
            if ($academy->getAchievementsId() === $this) {
                $academy->setAchievementsId(null);
            }
        }

        return $this;
    }
}
