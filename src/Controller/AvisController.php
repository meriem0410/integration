<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Entity\User;
use App\Entity\Reservation;
use App\Form\AvisType;
use App\Entity\Hebergement;
use App\Repository\AvisRepository;
use App\Repository\HebergementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/avis')]
class AvisController extends AbstractController
{
    #[Route('/', name: 'app_avis_index', methods: ['GET'])]
    public function index(AvisRepository $avisRepository): Response
    {
        return $this->render('avis/index.html.twig', [
            'avis' => $avisRepository->findAll(),
            //'hebergementId' => $HebergementId,
        ]);
    }
    public function peutAjouterAvis($userId, Hebergement $hebergement, EntityManagerInterface $entityManager): bool
{
    $user = $entityManager->getRepository(User::class)->find($userId);

    if (!$user) {
        // Si aucun utilisateur n'est trouvé avec cet ID, retourner faux
        return false;
    }
    // Supposons que vous avez une méthode dans votre repository de réservation qui peut vérifier cela
    $reservation = $entityManager->getRepository(Reservation::class)->findOneBy([
        'user' => $user,
        'hebergement' => $hebergement,
    ]);

    return $reservation !== null; // Retourne true si une réservation est trouvée, false sinon
}
#[Route('/new/{HebergementId}', name: 'app_avis_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager, $HebergementId, HebergementRepository $hebergementRepository): Response
{
    $Hebergement = $hebergementRepository->find($HebergementId);
    if (!$Hebergement) {
        throw $this->createNotFoundException('Aucun hébergement trouvé pour cet id '.$HebergementId);
    }

    // Créer une nouvelle instance d'Avis et initialiser avec Hebergement
    $avi = new Avis();
    $avi->setHebergement($Hebergement);

   

    $form = $this->createForm(AvisType::class, $avi);
    $form->handleRequest($request);
    
    if ($form->isSubmitted() && $form->isValid()) {
        // Vérifier si l'utilisateur peut ajouter un avis
        $user = $form->get('user')->getData(); // Assurez-vous que ce champ existe dans votre formulaire

        if (!$this->peutAjouterAvis($user, $Hebergement, $entityManager)) {
            $this->addFlash('error', 'Vous ne pouvez pas ajouter d\'avis sans avoir réservé cet hébergement');
            
        }

        $entityManager->persist($avi);
        $entityManager->flush();

        return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
    }


    // Afficher le formulaire s'il n'est pas soumis ou n'est pas valide
    return $this->render('avis/new.html.twig', [
        'avi' => $avi,
        'form' => $form->createView(),
    ]);
}
    

    #[Route('/{id}', name: 'app_avis_show', methods: ['GET'])]
    public function show(Avis $avi): Response
    {
        return $this->render('avis/show.html.twig', [
            'avi' => $avi,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_avis_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Avis $avi, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('avis/edit.html.twig', [
            'avi' => $avi,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_avis_delete', methods: ['POST'])]
    public function delete(Request $request, Avis $avi, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$avi->getId(), $request->request->get('_token'))) {
            $entityManager->remove($avi);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
    }
    
    #[Route('/avis/statistiques', name: 'avis_statistiques')]
    public function statistiques(AvisRepository $avisRepository, HebergementRepository $HebergementRepository): Response
    {
       
        // Récupérer les données de comptage des ratings
        $countByRating = $avisRepository->countByRating();
        $labels = [];
        $data = [];
        foreach ($countByRating as $rating) {
            $labels[] = $rating['rating'] . ' étoiles';
            $data[] = $rating['count'];
        }
    
        return $this->render('Hebergement/index.html.twig', [
            'ratingLabels' => json_encode($labels),
            'ratingData' => json_encode($data),
            //'donneesReservations' => json_encode($donneesReservations),
        ]);
    }
}
