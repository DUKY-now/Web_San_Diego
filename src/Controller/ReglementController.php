<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ReglementController extends AbstractController
{
    #[Route('/reglement', name: 'app_reglement')]
    public function index(): Response
    {
        return $this->render('reglement/index.html.twig', [
            'title' => 'Règlement Général - Project San Diego',
        ]);
    }

    #[Route('/reglement/{slug}', name: 'app_reglement_show')]
    public function show(string $slug): Response
    {
        return $this->render('reglement/show.html.twig', [
            'reglement' => ucfirst($slug),
        ]); 
    }
}
