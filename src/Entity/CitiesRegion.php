<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CitiesRegionRepository")
 */
class CitiesRegion
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cities", inversedBy="citiesRegions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Region;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRegion(): ?Cities
    {
        return $this->Region;
    }

    public function setRegion(?Cities $Region): self
    {
        $this->Region = $Region;

        return $this;
    }
}
