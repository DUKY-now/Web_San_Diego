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

    #[Route('/reglement/chapitres', name: 'app_reglement_chapitres')]
    public function chapitres(): Response
    {
        return $this->render('reglement/chapitres.html.twig', [
            'title' => 'Chapitres du Règlement - Project San Diego',
        ]);

    }
    
    #[Route('/reglement/civil', name: 'app_reglement_civil')]
    public function civil(): Response
    {
        return $this->render('reglement/civil.html.twig', [
            'title' => 'Règlement Civil - Project San Diego',
        ]);
    }

    #[Route('/reglement/factions', name:'app_reglement_factions')]
    public function factions(): Response
    {
        return $this->render('reglement/factions.html.twig',[
            'title' => 'Règlement des Factions - Project San Diego',
        ]);
    }
}
