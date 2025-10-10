<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class FactionController extends AbstractController
{
    // Liste des factions
    #[Route('/faction', name: 'app_faction')]
    public function index(): Response
    {
        // Définition des factions (à remplacer plus tard par une BDD)
        $factions = [
            [
                'name' => 'Confrérie de l\'Acier',
                'slug' => 'confrerie',
                'short_desc' => 'Gardiens de la technologie d\'avant-guerre.',
                'image' => 'factions/brotherhood.png',
            ],
            [
                'name' => 'Enclave',
                'slug' => 'enclave',
                'short_desc' => 'Survivants du gouvernement américain.',
                'image' => 'factions/enclave.png',
            ],
               [
                'name' => 'République de Nouvelle Californie',
                'slug' => 'Rnc',
                'short_desc' => 'Des mecs biens',
                'image' => 'factions/Rnc.png',
            ],
        ];

        return $this->render('faction/index.html.twig', [
            'factions' => $factions
        ]);
    }

    // Détails d’une faction
    #[Route('/faction/{slug}', name: 'app_faction_show')]
    public function show(string $slug): Response
    {
        // Simuler la récupération depuis la base de données
        $factions = [
            'confrerie' => [
                'name' => 'Confrérie de l\'Acier',
                'desc' => 'La Confrérie de l\'Acier protège les technologies...',
                'images' => ['Factions/brotherhood.png', 'Factions/brotherhood2.png'],
            ],
            'enclave' => [
                'name' => 'Enclave',
                'desc' => 'L\'Enclave est composée des survivants du gouvernement...',
                'images' => ['Factions/enclave.png', 'Factions/enclave2.png'],
            ],
            'Rnc' => [
                'name' => 'République de Nouvelle Californie',
                'desc' => 'Ils veulent que tous se passe bien.',
                'images' => ['Factions/Rnc.png', 'Factions/Rnc2.png'],
            ],
        ];

        if (!isset($factions[$slug])) {
            throw $this->createNotFoundException('Faction introuvable.');
        }

        $faction = $factions[$slug];

        return $this->render('faction/show.html.twig', [
            'faction' => $faction
        ]);
    }
}
