<?php

namespace App\Controller;

use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('search/search_random.html.twig', [
            'controller_name' => 'SearchController',
        ]);
    }

    #[Route('/random/search/{count<\d+>?2}', name: 'app_random_movie', methods: ['GET'])]
    public function randomMovie(MovieRepository $movieRepository, Request $request): Response
    {

        return $this->render('search/search_random.html.twig', [
            'random_movies' => $movieRepository->getRandomMovie($request->get('count')),
        ]);
    }

    #[Route('/search/{movie_name}', name: 'app_search_with_query', methods: ['GET'])]
    public function search(MovieRepository $movieRepository, Request $request): Response
    {
        return $this->render('search/search_random.html.twig', [
            'movies' => $movieRepository->findByMovieNameIgnoreCase($request->get('movie_name')),
            'term' => $request->get('movie_name')
        ]);
    }

}