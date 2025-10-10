<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FactionController extends AbstractController
{
    #[Route('/faction', name: 'app_faction')]
    public function index(): Response
    {
        return $this->render('faction/index.html.twig', [
            'title' => 'Factions et Groupes - Project San Diego',
        ]);
    }

    #[Route('/faction/{slug}', name: 'app_faction_show')]
    public function show(string $slug): Response
    {
        return $this->render('faction/show.html.twig', [
            'faction' => ucfirst($slug),
        ]);
    }
}
