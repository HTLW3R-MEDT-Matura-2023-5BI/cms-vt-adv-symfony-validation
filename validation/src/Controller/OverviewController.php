<?php

namespace App\Controller;

use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OverviewController extends AbstractController
{
    #[Route('/', name: 'app_overview')]
    public function index(MovieRepository $movieRepository): Response
    {
        return $this->render('overview/index.html.twig', [
            'movies' => $movieRepository->findAll(),
        ]);
    }
}
