<?php

namespace App\Controller;

use App\Entity\Excursion;
use App\Form\ExcursionType;
use App\Repository\ExcursionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

       
#[Route('/excursion')]
class ExcursionController extends AbstractController
{            //show back
    #[Route('/', name: 'app_excursion_index', methods: ['GET'])]
    public function index(ExcursionRepository $excursionRepository): Response
    {
        return $this->render('excursion/index.html.twig', [
            'excursions' => $excursionRepository->findAll(),
        ]);
    }
            //show vido guide back
    #[Route('/guideVideo/{id}', name: 'app_excursion_guideVideo', methods: ['GET'])]
    public function guideVideo($id , ExcursionRepository $excursionRepository): Response
    {
        return $this->render('excursion/GuideVideos.html.twig', [
            'excursions' => $excursionRepository->GetGuideVideos($id),
        ]);
    }
            // new excursion
    #[Route('/new', name: 'app_excursion_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $excursion = new Excursion();
        $form = $this->createForm(ExcursionType::class, $excursion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form['video']->getData();
            $newFilename = $imageFile->getClientOriginalName();
            $imageFile->move($this->getParameter('videos_directory'),$newFilename);
            $excursion->setVideo($newFilename);
            $entityManager->persist($excursion);
            $entityManager->flush();

            return $this->redirectToRoute('app_excursion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('excursion/new.html.twig', [
            'excursion' => $excursion,
            'form' => $form,
        ]);
    }
                //details
    #[Route('/{id}', name: 'app_excursion_show', methods: ['GET'])]
    public function show(Excursion $excursion): Response
    {
        return $this->render('excursion/show.html.twig', [
            'excursion' => $excursion,
        ]);
    }
                //edit
    #[Route('/{id}/edit', name: 'app_excursion_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Excursion $excursion, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ExcursionType::class, $excursion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_excursion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('excursion/edit.html.twig', [
            'excursion' => $excursion,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_excursion_delete', methods: ['POST'])]
    public function delete(Request $request, Excursion $excursion, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$excursion->getId(), $request->request->get('_token'))) {
            $entityManager->remove($excursion);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_excursion_index', [], Response::HTTP_SEE_OTHER);
    }
}
