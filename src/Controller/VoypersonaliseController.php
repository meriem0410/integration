<?php

namespace App\Controller;


use Imagine\Image\Box;
use Imagine\Gd\Imagine;
use Imagine\Image\Point;
use App\Entity\Voypersonalise;
use App\Form\VoypersonaliseType;
use Imagine\Image\ImageInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\VoypersonaliseRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/voypersonalise')]
class VoypersonaliseController extends AbstractController
{
    #[Route('/', name: 'app_voypersonalise_index', methods: ['GET'])]
    public function index(VoypersonaliseRepository $voypersonaliseRepository): Response
    {
        return $this->render('voypersonalise/index.html.twig', [
            'voypersonalises' => $voypersonaliseRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_voypersonalise_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $voypersonalise = new Voypersonalise();
        $form = $this->createForm(VoypersonaliseType::class, $voypersonalise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($voypersonalise);
            $entityManager->flush();
            return $this->redirectToRoute('app_res_msg');
        }

        return $this->render('voypersonalise/new.html.twig', [
            'voypersonalise' => $voypersonalise,
            'form' => $form,
        ]);}

     

    #[Route('/{id}/edit', name: 'app_voypersonalise_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Voypersonalise $voypersonalise, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(VoypersonaliseType::class, $voypersonalise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_voypersonalise_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('voypersonalise/edit.html.twig', [
            'voypersonalise' => $voypersonalise,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_voypersonalise_delete', methods: ['POST'])]
    public function delete(Request $request, Voypersonalise $voypersonalise, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$voypersonalise->getId(), $request->request->get('_token'))) {
            $entityManager->remove($voypersonalise);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_voypersonalise_index', [], Response::HTTP_SEE_OTHER);
    }
}
