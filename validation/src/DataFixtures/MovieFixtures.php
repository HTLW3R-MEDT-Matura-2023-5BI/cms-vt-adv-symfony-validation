<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use App\Entity\MovieQuote;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Exception;

class MovieFixtures extends Fixture
{
    /**
     * @throws Exception
     */
    public function load(ObjectManager $manager): void
    {
        $movies = [
            'Casablanca',
            'Gone By The Wind',
            'The Godfather',
            'Citizen Kane',
            'Forrest Gump',
            'Titanic',
            'The Silence Of The Lambs',
            'Chinatown',
            'Taxi Driver',
            'Terminator'
        ];

        $release_years = [1942, 1939, 1972, 1941, 1994, 1997, 1991, 1974, 1976, 1984];

        $quotes = [
            'Here\'s looking at you, kid.',
            'Frankly, my dear, I don\'t give a damn.',
            'I\'m going to make him an offer he can\'t refuse.',
            'Rosebud',
            'Mama always said life was like a box of chocolates. You never know what you\'re gonna get.',
            '\'m the king of the world!',
            'A census taker once tried to test me. I ate his liver with some fava beans and a nice Chianti.',
            'Forget it, Jake, it\'s Chinatown.',
            'You talkin\' to me?',
            'I\'ll be back.'
        ];

        $quoters = [
            'Rick Blaine',
            'Rhett Butler',
            'Vito Corleone',
            'Charles Foster Kane',
            'Forrest Gump',
            'Jack Dawson',
            'Hannibal Lecter',
            'Lawrence Walsh',
            'Travis Bickle',
            'The Terminator'
        ];

        for ($i = 0; $i < 10; $i++) {
            $movie = new Movie();
            $movie->setName($movies[$i]);
            $movie->setReleaseYear($release_years[$i]);
            $manager->persist($movie);

            $quote = new MovieQuote();
            $quote->setQuote($quotes[$i]);
            $quote->setQuoter($quoters[$i]);
            $quote->setMovie($movie);
            $manager->persist($quote);
        }

        $manager->flush();
    }
}