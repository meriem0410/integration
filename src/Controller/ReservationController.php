<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use App\Repository\HebergementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormError;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/reservation')]
class ReservationController extends AbstractController
{
    #[Route('/', name: 'app_reservation_index', methods: ['GET'])]
    public function index(ReservationRepository $reservationRepository): Response
    {
        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservationRepository->findAll(),
        ]);
    }

    #[Route('/new/{HebergementId}', name: 'app_reservation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, HebergementRepository $HebergementRepository, int $HebergementId): Response
    {
        $Hebergement = $HebergementRepository->find($HebergementId);
        $reservation = new Reservation();
        $reservation->setHebergement($Hebergement);
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Votre vérification existante pour le nombre d'invités
            if ($reservation->getNbguest() > $Hebergement->getMaxguest()) {
                $form->get('nbguest')->addError(new FormError("Le nombre d'invités doit être inférieur ou égal au nombre maximum autorisé pour cet hébergement."));
            }// Début de la nouvelle logique pour vérifier les chevauchements de réservation
            $reservations = $entityManager->getRepository(Reservation::class)->findBy([
                'Hebergement' => $Hebergement
            ]);
        
            $isOverlap = false;
            foreach ($reservations as $existingReservation) {
                if ($reservation->getcheckin() < $existingReservation->getcheckout() &&
                    $existingReservation->getcheckin() < $reservation->getcheckout()) {
                    $isOverlap = true;
                    break;
                }
            }
        
            if ($isOverlap) {
                $form->addError(new FormError("Il existe déjà une réservation pour cet hébergement aux dates sélectionnées."));
                // Afficher à nouveau le formulaire avec l'erreur
                return $this->render('reservation/new.html.twig', [
                    'reservation' => $reservation,
                    'form' => $form->createView(),
                ]);
            }
            // Fin de la nouvelle logique
        
            // La logique existante pour persister la réservation et rediriger
            $entityManager->persist($reservation);
            $entityManager->flush();
        
            return $this->redirectToRoute('app_reservation_show', ['id' => $reservation->getId()]);
        }

        return $this->render('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_show', methods: ['GET'])]
    public function show(Reservation $reservation): Response
    {
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reservation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_delete', methods: ['POST'])]
    public function delete(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reservation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
    }
}
