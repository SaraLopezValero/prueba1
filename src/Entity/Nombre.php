<?php

namespace App\Entity;

use App\Repository\NombreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NombreRepository::class)
 */
class Nombre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $persona;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPersona(): ?string
    {
        return $this->persona;
    }

    public function setPersona(string $persona): self
    {
        $this->persona = $persona;

        return $this;
    }
}
