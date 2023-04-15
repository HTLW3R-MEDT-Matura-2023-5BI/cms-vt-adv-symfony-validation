<?php

namespace App\Entity;

use App\Repository\MovieQuoteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MovieQuoteRepository::class)]
class MovieQuote
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $quote = null;

    #[ORM\Column(length: 255)]
    private ?string $quoter = null;

    #[ORM\ManyToOne(inversedBy: 'movieQuotes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Movie $movie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuote(): ?string
    {
        return $this->quote;
    }

    public function setQuote(string $quote): self
    {
        $this->quote = $quote;

        return $this;
    }

    public function getQuoter(): ?string
    {
        return $this->quoter;
    }

    public function setQuoter(string $quoter): self
    {
        $this->quoter = $quoter;

        return $this;
    }

    public function getMovie(): ?Movie
    {
        return $this->movie;
    }

    public function setMovie(?Movie $movie): self
    {
        $this->movie = $movie;

        return $this;
    }
}
