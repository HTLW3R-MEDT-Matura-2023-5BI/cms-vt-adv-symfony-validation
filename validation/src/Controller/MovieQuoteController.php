<?php

namespace App\Controller;

use App\Entity\MovieQuote;
use App\Form\MovieQuoteType;
use App\Repository\MovieQuoteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/quote')]
class MovieQuoteController extends AbstractController
{
    #[Route('/', name: 'app_movie_quote_index', methods: ['GET'])]
    public function index(MovieQuoteRepository $movieQuoteRepository): Response
    {
        return $this->render('movie_quote/index.html.twig', [
            'movie_quotes' => $movieQuoteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_movie_quote_new', methods: ['GET', 'POST'])]
    public function new(Request $request, MovieQuoteRepository $movieQuoteRepository): Response
    {
        $movieQuote = new MovieQuote();
        $form = $this->createForm(MovieQuoteType::class, $movieQuote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $movieQuoteRepository->save($movieQuote, true);

            return $this->redirectToRoute('app_movie_quote_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('movie_quote/new.html.twig', [
            'movie_quote' => $movieQuote,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_movie_quote_show', methods: ['GET'])]
    public function show(MovieQuote $movieQuote): Response
    {
        return $this->render('movie_quote/show.html.twig', [
            'movie_quote' => $movieQuote,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_movie_quote_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, MovieQuote $movieQuote, MovieQuoteRepository $movieQuoteRepository): Response
    {
        $form = $this->createForm(MovieQuoteType::class, $movieQuote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $movieQuoteRepository->save($movieQuote, true);

            return $this->redirectToRoute('app_movie_quote_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('movie_quote/edit.html.twig', [
            'movie_quote' => $movieQuote,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_movie_quote_delete', methods: ['POST'])]
    public function delete(Request $request, MovieQuote $movieQuote, MovieQuoteRepository $movieQuoteRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$movieQuote->getId(), $request->request->get('_token'))) {
            $movieQuoteRepository->remove($movieQuote, true);
        }

        return $this->redirectToRoute('app_movie_quote_index', [], Response::HTTP_SEE_OTHER);
    }
}
