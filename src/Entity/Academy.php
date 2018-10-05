<?php

namespace App\Entity;

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
     * @ORM\ManyToOne(targetEntity="App\Entity\Sports", inversedBy="academies")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sports;

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

    public function getSports(): ?Sports
    {
        return $this->sports;
    }

    public function setSports(?Sports $sports): self
    {
        $this->sports = $sports;

        return $this;
    }
}
