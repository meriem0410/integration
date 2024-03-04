<?php

namespace App\Controller;

use App\Entity\Programme;

use App\Repository\VoyageRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

     #[Route('/test', name: 'app_test', methods: ['GET'])]
    public function show1 (VoyageRepository $voyageRepository): Response
    {
        return $this->render('test/index.html.twig', [
            'voyages' => $voyageRepository->findAll(),
        ]);
    }
    


   
}



    

