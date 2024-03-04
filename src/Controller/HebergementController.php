<?php

namespace App\Controller;

use App\Entity\Hebergement;
use App\Form\HebergementType;
use App\Form\SearchType;
use App\Model\SearchData;
use App\Repository\HebergementRepository;
use App\Repository\ReservationRepository;
use App\Repository\AvisRepository;
use Psr\Log\LoggerInterface;
use Endroid\QrCode\QrCode;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Endroid\QrCode\Builder\BuilderInterface;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\Response\QrCodeResponse;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Writer\Result\ResultInterface;
use Endroid\QrCode\Label\Alignment\LabelAlignmentLeft;
use Endroid\QrCode\Label\LabelAlignment;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/hebergement')]
class HebergementController extends AbstractController
{
#[Route('/index', name: 'app_Hebergement_index', methods: ['GET'])]
public function index(Request $request, HebergementRepository $HebergementRepository, AvisRepository $avisRepository): Response

{
    ini_set('memory_limit', '1024M');
    
    $countByRating = $avisRepository->countByRating();
    
    $labels = [];
    $data = [];
    foreach ($countByRating as $ratingData) {
        $labels[] = $ratingData['rating'] . ' étoiles'; // Ou juste $ratingData['rating'] si vous ne voulez pas ajouter "étoiles"
        $data[] = $ratingData['count'];
    }
    $searchForm = $this->createForm(SearchType::class);
    $Hebergements = $HebergementRepository->findAll();
    
    return $this->render('Hebergement/index.html.twig', [
        'ratingLabels' => json_encode($labels),
        'ratingData' => json_encode($data),
        'searchForm' => $searchForm->createView(),
        'Hebergements' => $Hebergements,
    ]);
}
    #[Route('/search', name: 'Hebergement_search')]
    public function search(Request $request, HebergementRepository $HebergementRepository ,AvisRepository $avisRepository, EntityManagerInterface $entityManager,LoggerInterface $logger): Response
    {
    
        $searchData = new SearchData();
        $countByRating = $avisRepository->countByRating();
    
    $labels = [];
    $data = [];
    foreach ($countByRating as $ratingData) {
        $labels[] = $ratingData['rating'] . ' étoiles'; // Ou juste $ratingData['rating'] si vous ne voulez pas ajouter "étoiles"
        $data[] = $ratingData['count'];
    }
        $searchForm = $this->createForm(SearchType::class, $searchData);
        $searchForm->handleRequest($request);
        $Hebergements ='';
        dump($searchData);
    
        if ($searchForm->isSubmitted() && $searchForm->isValid()) {
            // Si le formulaire est soumis et valide, utilisez les données directement depuis $searchData
            $searchData = $searchForm->getData();
            $Hebergements = $HebergementRepository->findSearch($searchData);
        } 
    
        
         // Logique pour afficher les requêtes SQL
    $sqlLogger = new \Doctrine\DBAL\Logging\DebugStack();
    $entityManager->getConnection()->getConfiguration()->setSQLLogger($sqlLogger);

    // Effectuer des opérations qui génèrent des requêtes SQL...

    // Log les requêtes SQL
    foreach ($sqlLogger->queries as $query) {
        $logger->info('SQL Query', ['query' => $query]);
        
    }
    
        return $this->render('Hebergement/index.html.twig', [
            'ratingLabels' => json_encode($labels),
        'ratingData' => json_encode($data),
            'Hebergements' => $Hebergements,
            'searchForm' => $searchForm->createView(),
            'isSearchResult' => true,
        ]);
    }

    #[Route('/new', name: 'app_Hebergement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $Hebergement = new Hebergement();
        $form = $this->createForm(HebergementType::class, $Hebergement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('image')->getData();

            if ($file instanceof UploadedFile) {
                // L'upload a eu lieu, procédez au traitement du fichier
                $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                // Vous pouvez également ajouter une logique pour sécuriser $originalFilename ici
            
                // Générez un nouveau nom pour le fichier pour éviter les conflits de noms
                $newFilename = $originalFilename.'-'.uniqid().'.'.$file->guessExtension();
            
                // Déplacez le fichier vers le répertoire où les images sont stockées
                try {
                    $file->move(
                        $this->getParameter('uploads_directory'), // Vous devez définir ce paramètre dans services.yaml
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('danger', 'Un problème est survenu lors du téléchargement du fichier. Veuillez réessayer.');
                    // Gérez l'exception si quelque chose se passe mal pendant le déplacement du fichier
                }
            
                // Mettez à jour l'entité avec le nouveau nom de fichier
                $Hebergement->setImage($newFilename);
            }
            $entityManager->persist($Hebergement);
            $entityManager->flush();
        
        

            return $this->redirectToRoute('app_Hebergement_index', [], Response::HTTP_SEE_OTHER);
        
        }
    
        return $this->render('Hebergement/new.html.twig', [
            'Hebergement' => $Hebergement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_Hebergement_show', methods: ['GET','POST'])]
    public function show(Hebergement $Hebergement): Response
    {
        $searchForm = $this->createForm(SearchType::class);
        return $this->render('Hebergement/show.html.twig', [
            'searchForm' => $searchForm->createView(),
            'Hebergement' => $Hebergement,
        ]);
    }
    #[Route('/generate_qr_code', name: 'generate_qr_code', methods: ['POST'])]
public function generateQrCode(Request $request, HebergementRepository $hebergementRepository): Response
{
    $id = $request->request->get('id'); // Récupération de l'ID de l'hébergement à partir du corps de la requête POST
    dump($id);
    $Hebergement = $hebergementRepository->find($id);
    dump($Hebergement);
    if (!$Hebergement) {
        throw $this->createNotFoundException('Hebergement not found');
    }
        $text = $request->request->get('text');
        $qrCode = QrCode::create($text)
            ->setSize(600)
            ->setMargin(40)
            ->setForegroundColor(new Color(0, 0, 128)) // Dark blue foreground color
            ->setBackgroundColor(new Color(153, 204, 255))
            ->setErrorCorrectionLevel(ErrorCorrectionLevel::High); // Set error correction level to HIGH

        // Create label
        $label = Label::create("CoLocStudy")
            ->setTextColor(new Color(255, 0, 0)) // Red text color
            ->setAlignment(LabelAlignment::Left); // Align label to left

        // Create PNG writer
        $writer = new PngWriter();

        // Write QR code to PNG image with label
        $result = $writer->write($qrCode, label: $label);

        // Output QR code image to the browser
        return new Response($result->getString(), Response::HTTP_OK, ['Content-Type' => $result->getMimeType()]);
    }    

    #[Route('/{id}/edit', name: 'app_Hebergement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Hebergement $Hebergement, EntityManagerInterface $entityManager): Response
    {
        $searchForm = $this->createForm(SearchType::class);
        $form = $this->createForm(HebergementType::class, $Hebergement);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageFile')->getData(); // Assurez-vous que 'imageFile' est le nom correct du champ dans votre formulaire

            if ($imageFile) {
                // Obtenez l'extension de fichier originale
                $originalExtension = $imageFile->guessExtension();
        
                // Générez un nom de fichier unique
                $newFilename = $this->generateUniqueFileName().'.'.$originalExtension;
        
                // Déplacez le fichier dans le répertoire où les images sont stockées
                $imageFile->move(
                    $this->getParameter('uploads_directory'), // Assurez-vous que ce paramètre est correctement configuré
                    $newFilename
                );
        
                // Mettez à jour l'entité avec le nouveau nom de fichier
                $Hebergement->setImage($newFilename);
            }
    
            $entityManager->flush();

            return $this->redirectToRoute('app_Hebergement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Hebergement/edit.html.twig', [
            'searchForm' => $searchForm->createView(),
            'Hebergement' => $Hebergement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_Hebergement_delete', methods: ['POST'])]
    public function delete(Request $request, Hebergement $Hebergement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$Hebergement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($Hebergement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_Hebergement_index', [], Response::HTTP_SEE_OTHER);
    }

   /**
 * @Route("/api/Hebergements/{id}/dates-reservees", name="api_dates_reservees", methods={"GET"})
 */
public function getDatesReservees(Hebergement $Hebergement): JsonResponse
{
    // Récupérez le repository de l'entité Reservation
    $reservationRepository = $this->getDoctrine()->getRepository(Reservation::class);

    // Trouvez toutes les réservations pour l'hébergement donné
    $reservations = $reservationRepository->findBy(['Hebergement' => $Hebergement]);

    $datesReservees = [];

    // Extrayez les dates de Checkin et Checkout de chaque réservation
    foreach ($reservations as $reservation) {
        $checkin = $reservation->getCheckin()->format('Y-m-d');
        $checkout = $reservation->getCheckout()->format('Y-m-d');

        // Ajoutez chaque paire de dates à votre tableau de dates réservées
        $datesReservees[] = ['checkin' => $checkin, 'checkout' => $checkout];
    }

    // Retournez le tableau de dates réservées en format JSON
    return $this->json($datesReservees);
}


}
