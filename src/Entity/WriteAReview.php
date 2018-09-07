<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WriteAReviewRepository")
 */
class WriteAReview
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $EmailAddress;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $YouAre;

    /**
     * @ORM\Column(type="text")
     */
    private $YourMessage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getEmailAddress(): ?string
    {
        return $this->EmailAddress;
    }

    public function setEmailAddress(string $EmailAddress): self
    {
        $this->EmailAddress = $EmailAddress;

        return $this;
    }

    public function getYouAre(): ?string
    {
        return $this->YouAre;
    }

    public function setYouAre(string $YouAre): self
    {
        $this->YouAre = $YouAre;

        return $this;
    }

    public function getYourMessage(): ?string
    {
        return $this->YourMessage;
    }

    public function setYourMessage(string $YourMessage): self
    {
        $this->YourMessage = $YourMessage;

        return $this;
    }
}
