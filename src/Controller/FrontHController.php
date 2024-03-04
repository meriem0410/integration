<?php

namespace App\Controller;



use App\Entity\Hebergement;
use App\Entity\Avis;
use App\Form\AvisType;
use App\Repository\AvisRepository;
use App\Form\HebergementType;
use App\Repository\HebergementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class FrontHController extends AbstractController
{
    #[Route('/front/h', name: 'app_front_h',methods: ['GET'])]
    public function index(Request $request, HebergementRepository $HebergementRepository): Response
    { 
        $sortBy = $request->query->get('sortBy', 'averageRating');
        $sortDirection = $request->query->get('sortDirection', 'DESC');
        
        $Hebergements = $HebergementRepository->findAllWithAverageRatingAndSort($sortBy, $sortDirection);
    
        return $this->render('front_h/index.html.twig', [
            'Hebergements' => $Hebergements,
        ]);
    }
    #[Route('/Hebergement_avis', name: 'Hebergement_avis', methods: ['GET', 'POST'])]
    public function Hebergementavis(Request $request, ReservationRepository $reservationRepository, EntityManagerInterface $entityManager): Response
    {
        dump('Controller hit'); // Confirm the action is being accessed

    $form = $this->createForm(HebergementSelectType::class);
    $form->handleRequest($request);
    $avis = []; // Define $avis as an empty array initially

    dump($request); // See the submitted data

    if ($form->isSubmitted() && $form->isValid()) {
        dump($form->getData()); // Inspect the form data

        $Hebergement = $form->get('HebergementId')->getData(); // Assuming you get a Hebergement entity
        dump($Hebergement); // Should dump the Hebergement entity

        if ($Hebergement) {
            $HebergementId = $Hebergement->getId();
            dump($HebergementId); // This should dump the Hebergement's ID

            $avis = $reservationRepository->findBy(['Hebergement' => $HebergementId]);
            dump($avis); // This should dump the avis array
        }
    }
}

#[Route('/{id}', name: 'app_front_h_show', methods: ['GET'])]
public function show($id, HebergementRepository $hebergementRepository): Response
{
    $hebergement = $hebergementRepository->find($id);

    if (!$hebergement) {
        throw $this->createNotFoundException(
            'Aucun hébergement trouvé pour cet id : '.$id
        );
    }

    // Si la méthode getAvis est définie dans votre entité Hebergement
    // et retourne une collection d'avis liés à cet hébergement
    $avis = $hebergement->getAvis();

    return $this->render('front_h/show.html.twig', [
        'hebergement' => $hebergement,
        'avis' => $avis,
    ]);
}
}
