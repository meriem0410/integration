<?php

namespace App\Controller;

use App\Entity\Guide;
use App\Form\GuideType;
use App\Repository\GuideRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ExcursionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/guide')]
class GuideController extends AbstractController
{
    #[Route('/', name: 'app_guide_index', methods: ['GET'])]
    public function index(GuideRepository $guideRepository): Response
    {
        $queryBuilder = $guideRepository->createQueryBuilder('g')
        ->select('g.nom as nom', 'g.prenom as prenom', 'SUM(g.Likes) as Likes', 'SUM(g.Dislikes) as Dislikes', 'COUNT(e.id) AS videoCount')
        ->leftJoin('g.excursions', 'e')
        ->groupBy('g.id');
        $data = $queryBuilder->getQuery()->getResult(); 
   
        return $this->render('guide/index.html.twig', [
            'data' => $data,
            'guides' => $guideRepository->findAll(),
        ]);
    } 

                    //Videos number

    #[Route('/guides', name: 'app_guide_indexFront', methods: ['GET'])]
    public function indexFront(GuideRepository $guideRepository): Response
    {
         $data = $guideRepository->createQueryBuilder('g')
            ->select('g', 'COUNT(e.id) AS videoCount')
            ->leftJoin('g.excursions', 'e')
            ->groupBy('g.id')
            ->getQuery()
            ->getResult();
            $guides = [];
            foreach ($data as $item) {
                $guide = $item[0]; // Assuming that 'g' is the first element in the result array
                $guide->videoCount = $item['videoCount'];
                $guides[] = $guide;
            }
        return $this->render('guide/front.html.twig', [
            'guides' => $guides,
        ]);
    }
            ///TRI dislikes alias
    #[Route('/OrderByDisLikes', name: 'app_guide_OrderByDisLikes')]
    public function OrderByDisLikes(GuideRepository $guideRepository): Response
    {
        $data = $guideRepository->createQueryBuilder('g')
        ->select('g', 'COUNT(e.id) AS videoCount')
        ->leftJoin('g.excursions', 'e')
        ->orderBy('g.Dislikes', 'DESC')
        ->groupBy('g.id')
        ->getQuery()
        ->getResult();
        $guides = [];
        foreach ($data as $item) {
            $guide = $item[0]; // Assuming that 'g' is the first element in the result array
            $guide->videoCount = $item['videoCount'];
            $guides[] = $guide;
        }
    return $this->render('guide/front.html.twig', [
        'guides' => $guides,
    ]);
}    

        ///TRI likes
    #[Route('/OrderByLikes', name: 'app_guide_OrderByLikes')]
public function OrderByLikes(GuideRepository $guideRepository): Response
{
    $data = $guideRepository->createQueryBuilder('g')
    ->select('g', 'COUNT(e.id) AS videoCount')
    ->leftJoin('g.excursions', 'e')
    ->orderBy('g.Likes', 'DESC')
    ->groupBy('g.id')
    ->getQuery()
    ->getResult();
    $guides = [];
    foreach ($data as $item) {
        $guide = $item[0]; // Assuming that 'g' is the first element in the result array
        $guide->videoCount = $item['videoCount'];
        $guides[] = $guide;
    }
return $this->render('guide/front.html.twig', [
    'guides' => $guides,
]);
}  
                //collect data et affichage
    #[Route('/dash', name: 'app_guide_indexdash')]
    public function indexdash(GuideRepository $guideRepository): Response
    {
        $queryBuilder = $guideRepository->createQueryBuilder('g')
            ->select('g.nom as nom', 'g.prenom as prenom', 'SUM(g.Likes) as Likes', 'SUM(g.Dislikes) as Dislikes')
            ->groupBy('g.nom', 'g.prenom');
    
        $data = $queryBuilder->getQuery()->getResult();
        return $this->render('guide/dashboard.html.twig', [
            'data' => $data,
            'guides' => $guideRepository->findAll(),
        ]);
    }
    

                // new guide

    #[Route('/new', name: 'app_guide_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $guide = new Guide();
        $form = $this->createForm(GuideType::class, $guide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form['image']->getData();
            $newFilename = $imageFile->getClientOriginalName();
            $imageFile->move($this->getParameter('images_directory'),$newFilename);
            $guide->setPrenom($form['prenom']->getData());
            $guide->setLikes(0);
            $guide->setDislikes(0);
            $guide->setImage($newFilename);
            $entityManager->persist($guide);
            $entityManager->flush();

            return $this->redirectToRoute('app_guide_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('guide/new.html.twig', [
            'guide' => $guide,
            'form' => $form,
        ]);
    }
            //show 
    #[Route('/{id}', name: 'app_guide_show', methods: ['GET'])]
    public function show($id , Guide $guide  , ExcursionRepository $excursionRepository): Response
    {
        return $this->render('guide/show.html.twig', [
            'guide' => $guide,
            'excursions' => $excursionRepository->GetGuideVideos($id),
        ]);
    }

    #[Route('/guide/{id}', name: 'app_guide_showFront', methods: ['GET'])]
    public function showFront($id , Guide $guide  , ExcursionRepository $excursionRepository): Response
    {
        return $this->render('guide/showFront.html.twig', [
            'guide' => $guide,
            'excursions' => $excursionRepository->GetGuideVideos($id),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_guide_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Guide $guide, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(GuideType::class, $guide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_guide_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('guide/edit.html.twig', [
            'guide' => $guide,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_guide_delete', methods: ['POST'])]
    public function delete(Request $request, Guide $guide, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$guide->getId(), $request->request->get('_token'))) {
            $entityManager->remove($guide);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_guide_index', [], Response::HTTP_SEE_OTHER);
    }
    private $guideRepository;

    public function __construct(GuideRepository $guideRepository)
    {
        $this->guideRepository = $guideRepository;
    }

                    //Like by thumb
    #[Route('/Thumbs_up/{id}', name: 'Thumbs_up')]
    public function Thumbs_Up($id , EntityManagerInterface $entityManager): Response
    {
        $guide = $entityManager->getRepository(Guide::class)->find($id);

        $likes = $guide->getLikes();
        $guide->setLikes(++$likes);

        $entityManager->persist($guide);
        $entityManager->flush();

        return $this->redirectToRoute('app_guide_showFront', ['id' => $guide->getId()]);
    }
                //DisLike by thumb
    #[Route('/Thumbs_Down/{id}', name: 'Thumbs_Down')]
    public function Thumbs_Down($id , EntityManagerInterface $entityManager): Response
    {
        $guide = $entityManager->getRepository(Guide::class)->find($id);

        $likes = $guide->getDislikes();
        $guide->setDislikes(++$likes);

        $entityManager->persist($guide);
        $entityManager->flush();

        return $this->redirectToRoute('app_guide_showFront', ['id' => $guide->getId()]);
    }


    
    
}
