<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EquipeModerationController extends AbstractController
{
    #[Route('/equipe/moderation', name: 'app_equipe_moderation')]
    public function index(): Response
    {
        return $this->render('equipe_moderation/index.html.twig', [
            'title' => 'Présentation de l\'équiepe de administration - Project San Diego',
        ]);
    }
}
