<?php

namespace App\Controller;

use App\Entity\EtatStocks;
use App\Repository\EtatStocksRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StocksController extends AbstractController
{
    #[Route('/stocks', name: 'app_stocks')]
    public function index(EtatStocksRepository $etatStocksRepository): Response
    {
        $stocks = $etatStocksRepository->findAll();
        return $this->render('stocks/stocks.html.twig', [
            'stocks' => $stocks,
        ]);
    }
}
