<?php

namespace App\Controller;

use App\Repository\FactionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class FactionController extends AbstractController
{
    
    // Liste des factions
    #[Route('/faction', name: 'app_faction')]
    public function index(FactionsRepository $FactionsRepository): Response
    {
        $factions = $FactionsRepository->findAll();

        return $this->render('faction/index.html.twig', [
            'factions' => $factions
        ]);
        
    }

    // Détails d’une faction
#[Route('/faction/{slug}', name: 'app_faction_show')]
public function show(string $slug, FactionsRepository $factionRepository): Response
{
    // On récupère la faction correspondante au slug
    $faction = $factionRepository->findOneBy(['slug' => $slug]);

    // Si aucune faction n'est trouvée, on lève une erreur 404
    if (!$faction) {
        throw $this->createNotFoundException('Faction introuvable.');
    }

    // On envoie la faction trouvée à la vue
    return $this->render('faction/show.html.twig', [
        'faction' => $faction,
    ]);
}

}
