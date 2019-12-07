<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PresenceRepository")
 */
class Presence
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Employee", inversedBy="presences")
     */
    private $employee;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Temps", inversedBy="presences")
     */
    private $temps;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmployee(): ?Employee
    {
        return $this->employee;
    }

    public function setEmployee(?Employee $employee): self
    {
        $this->employee = $employee;

        return $this;
    }

    public function getTemps(): ?Temps
    {
        return $this->temps;
    }

    public function setTemps(?Temps $temps): self
    {
        $this->temps = $temps;

        return $this;
    }
}
