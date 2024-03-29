<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SignUpType;
use Doctrine\ORM\EntityManagerInterface; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SignUpController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/signup', name: 'app_sign_up')]
    public function index(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(SignUpType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Hash the password before setting it
            $newHashedPassword = password_hash($user->getPassword(), PASSWORD_DEFAULT);
            $user->setPassword($newHashedPassword);

            $this->entityManager->persist($user);
            $this->entityManager->flush();

            // Redirect the user after successful sign-up
            return $this->redirectToRoute('login'); 
        }

        return $this->render('sign_up/signup.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
