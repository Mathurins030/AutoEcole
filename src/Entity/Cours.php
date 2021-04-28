<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CoursRepository::class)
 */
class Cours
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $duree;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateCours;

    /**
     * @ORM\ManyToOne(targetEntity=Formateur::class)
     */
    private $formateurId;

    /**
     * @ORM\ManyToOne(targetEntity=Lecon::class)
     */
    private $leconId;

    /**
     * @ORM\ManyToOne(targetEntity=Lecon::class)
     */
    private $clientId;

    public function __toString(): string
    {
        return (string) $this->getFormateurId;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getDateCours(): ?\DateTimeInterface
    {
        return $this->dateCours;
    }

    public function setDateCours(\DateTimeInterface $dateCours): self
    {
        $this->dateCours = $dateCours;

        return $this;
    }

    public function getFormateurId(): ?Formateur
    {
        return $this->formateurId;
    }

    public function setFormateurId(?Formateur $formateurId): self
    {
        $this->formateurId = $formateurId;

        return $this;
    }

    public function getLeconId(): ?Lecon
    {
        return $this->leconId;
    }

    public function setLeconId(?Lecon $leconId): self
    {
        $this->leconId = $leconId;

        return $this;
    }

    public function getClientId(): ?Lecon
    {
        return $this->clientId;
    }

    public function setClientId(?Lecon $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }
}
