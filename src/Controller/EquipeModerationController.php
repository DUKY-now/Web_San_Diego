<?php

namespace App\Controller;

use App\Repository\StaffsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EquipeModerationController extends AbstractController
{
    #[Route('/equipe/moderation', name: 'app_equipe_moderation')]
    public function index(StaffsRepository $staffsRepository): Response
    {
        $staffs = $staffsRepository->findAll();
        return $this->render('equipe_moderation/index.html.twig', [
            'title' => 'Présentation de l\'équiepe de administration - Project San Diego',
            'staffs' => $staffs,
        ]);
    }
}
