<?php

namespace App\Entity;

use App\Repository\HealthcheckRepository;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HealthcheckRepository::class)]
#[ApiResource]
class Healthcheck
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $sayHello = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSayHello(): ?string
    {
        return $this->sayHello;
    }

    public function setSayHello(string $sayHello): static
    {
        $this->sayHello = $sayHello;

        return $this;
    }
}
