<?php

namespace App\Controller;

use App\Entity\Programme;
use App\Repository\ProgrammeRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProgController extends AbstractController
{
    #[Route('/prog/{id}', name: 'app_prog')]
    public function index(int $id, ProgrammeRepository $programmeRepository): Response
    {
        // Récupérer le programme correspondant à l'ID
        $programme = $programmeRepository->find($id);

        // Vérifier si le programme existe
        if (!$programme) {
            throw $this->createNotFoundException('Programme non trouvé');
        }

        return $this->render('prog/index.html.twig', [
            'programme' => $programme,
        ]);
    }
}


