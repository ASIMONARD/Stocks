<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AddStockController extends AbstractController
{
    #[Route('/addStock', name: 'app_addStock')]
    public function index(): Response
    {
        return $this->render('stocks/addStock.html.twig', [
            'controller_name' => 'AddStockController',
        ]);
    }
}
