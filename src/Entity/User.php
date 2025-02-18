<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(length: 255)]
    private ?string $Age = null;

    #[ORM\Column(length: 255)]
    private ?string $Nb_Posts = null;

    #[ORM\Column(length: 255)]
    private ?string $Followers = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }

    public function getAge(): ?string
    {
        return $this->Age;
    }

    public function setAge(string $Age): static
    {
        $this->Age = $Age;

        return $this;
    }

    public function getNbPosts(): ?string
    {
        return $this->Nb_Posts;
    }

    public function setNbPosts(string $Nb_Posts): static
    {
        $this->Nb_Posts = $Nb_Posts;

        return $this;
    }

    public function getFollowers(): ?string
    {
        return $this->Followers;
    }

    public function setFollowers(string $Followers): static
    {
        $this->Followers = $Followers;

        return $this;
    }
}
