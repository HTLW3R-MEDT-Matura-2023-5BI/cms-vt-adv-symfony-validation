<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MovieRepository::class)]
class Movie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank(message: 'Bitte geben Sie einen Namen ein')]
    #[Assert\Length(min: 1, minMessage: 'Der Name muss mindestens {{ limit }} Zeichen lang sein.')]
    #[Assert\Length(max: 80, maxMessage: 'Der Name kann nicht länger als {{ limit }} Zeichen lang sein.')]
    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    #[Assert\NotNull(message: 'Bitte geben Sie ein Erscheinungsjahr ein')]
    #[Assert\Positive(message: 'Das Erscheinungsjahr muss eine positive ganze Zahl sein')]
    private ?int $release_year = null;

    #[ORM\OneToMany(mappedBy: 'movie', targetEntity: MovieQuote::class, orphanRemoval: true)]
    private Collection $movieQuotes;

    public function __construct()
    {
        $this->movieQuotes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getReleaseYear(): ?int
    {
        return $this->release_year;
    }

    public function setReleaseYear(int $release_year): self
    {
        $this->release_year = $release_year;

        return $this;
    }

    /**
     * @return Collection<int, MovieQuote>
     */
    public function getMovieQuotes(): Collection
    {
        return $this->movieQuotes;
    }

    public function addMovieQuote(MovieQuote $movieQuote): self
    {
        if (!$this->movieQuotes->contains($movieQuote)) {
            $this->movieQuotes->add($movieQuote);
            $movieQuote->setMovie($this);
        }

        return $this;
    }

    public function removeMovieQuote(MovieQuote $movieQuote): self
    {
        if ($this->movieQuotes->removeElement($movieQuote)) {
            // set the owning side to null (unless already changed)
            if ($movieQuote->getMovie() === $this) {
                $movieQuote->setMovie(null);
            }
        }

        return $this;
    }

    public function __toString(): string {
        return $this->name . ', ' . $this->release_year;
    }
}
