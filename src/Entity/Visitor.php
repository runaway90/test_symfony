<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VisitorRepository")
 */
class Visitor
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
    private $uuid;

    /**
     * @ORM\Column(type="datetime")
     */
    private $firts_visit;

    /**
     * @ORM\Column(type="datetime")
     */
    private $last_visit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

    public function getFirtsVisit(): ?\DateTimeInterface
    {
        return $this->firts_visit;
    }

    public function setFirtsVisit(\DateTimeInterface $firts_visit): self
    {
        $this->firts_visit = $firts_visit;

        return $this;
    }

    public function getLastVisit(): ?\DateTimeInterface
    {
        return $this->last_visit;
    }

    public function setLastVisit(\DateTimeInterface $last_visit): self
    {
        $this->last_visit = $last_visit;

        return $this;
    }
}
