<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;
use App\Enum\UserRoleEnum;
use App\Entity\User;
use App\Form\VerifPasswordType;
use App\Form\SignUpType;
use App\Form\VerificationCodeType;
use App\Form\LoginType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Transport;
class LoginController extends AbstractController
{
    private $entityManager;
    private $verificationCode;
    private $user;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/login', name: 'login')]
    public function login(Request $request, UserRepository $userRepository, SessionInterface $session ): Response
    {
        $form = $this->createForm(LoginType::class);
        $form->handleRequest($request);

        $formSignup = $this->createForm(SignUpType::class);
        $formSignup->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle login form submission
            $userFormData = $form->getData();
            $user = $userRepository->findOneBy(['email' => $userFormData->getEmail()]);

            if ($user !== null && $user->isVerified() && password_verify($userFormData->getPassword(), $user->getPassword())) {
                // Start session and store user data

                $session->set('user', $user); // Store user entity in session


                $session->set('id', $user->getId());
                $session->set('username', $user->getUsername());
                $session->set('email', $user->getEmail());
                $session->set('role', $user->getRole());
                $session->set('isBanned', $user->getIsBanned());
                return $this->redirectToRoute('app_home');
                return $this->render('status/index.html.twig');
            } else if ($user !== null && !($user->isVerified()) && password_verify($userFormData->getPassword(), $user->getPassword())) {
                

                $this->verificationCode = bin2hex(random_bytes(16));
                $session->set('verification_code', $this->verificationCode);
                $transport=Transport::fromDsn('smtp://piesprit91@gmail.com:etgrlloxvwswxyxz@smtp.gmail.com:587');
                // Create a new User object and set its properties
                $mailer = new Mailer($transport);
                $email=(new Email())
                ->from ('piesprit91@gmail.com')
                ->to($user->getEmail())
                //->to('azizrk19@gmail.com')
                ->subject('Email Verification')
                ->html($this->renderView('emails/signup.html.twig',['username' => $user->getUsername(),'verificationCode' =>  $this->verificationCode] // Replace 'John Doe' with the actual username
            ));

                $mailer->send($email);
                return $this->redirectToRoute('verify_code');
            } else  {
                // Handle invalid login
                $this->addFlash('error', 'Invalid email or password.');
            }
        }

        if ($formSignup->isSubmitted() && $formSignup->isValid()) {
            // Handle sign-up form submission
            $formData = $formSignup->getData();
            $existingUser = $userRepository->findOneBy(['email' => $formData->getEmail()]);
        
            if ($existingUser) {
                $this->addFlash('error', 'Email is already in use.');
            } else {
                $this->verificationCode = bin2hex(random_bytes(16));
                $session->set('verification_code', $this->verificationCode);
        
                // Create a new User object and set its properties
                $user = new User();
                $user->setUsername($formData->getUsername());
                $user->setVerified(0); // Set as unverified initially
                $user->setEmail($formData->getEmail());
                $user->setPassword(password_hash($formData->getPassword(), PASSWORD_DEFAULT));
        
                
        
                // Use EntityManagerInterface to persist and flush
                $this->entityManager->persist($user);
                $this->entityManager->flush();
        
            
                $this->addFlash('success', 'Sign-up successful. Please verify your email.');

                 // Store user in session
                 $session->set('user', $user);  
                 $this->verificationCode = bin2hex(random_bytes(16));
                 $session->set('verification_code', $this->verificationCode);
                 $transport=Transport::fromDsn('smtp://piesprit91@gmail.com:etgrlloxvwswxyxz@smtp.gmail.com:587');
                 // Create a new User object and set its properties
                 $mailer = new Mailer($transport);
                 $email=(new Email())
                 ->from ('piesprit91@gmail.com')
                 ->to($user->getEmail())
                 //->to('azizrk19@gmail.com')
                 ->subject('Email Verification')
                 ->html($this->renderView('emails/signup.html.twig',['username' => $user->getUsername(),'verificationCode' =>  $this->verificationCode] // Replace 'John Doe' with the actual username
             ));
 
                 $mailer->send($email);
                return $this->redirectToRoute('verify_code');
            }
        }
        return $this->render('login/login2.html.twig', [
            'formSignup' => $formSignup->createView(),
            'form' => $form->createView(),
        ]);


    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(SessionInterface $session): Response
    {
        $session->invalidate();
        return $this->redirectToRoute('login');
    }

    #[Route('/forgetPasswordEmail', name: 'app_forgetPasswordEmail')]
    public function forgetPasswordEmail(SessionInterface $session): Response
    {
        $user = $session->get('user');
        $forgetPasswordCode = bin2hex(random_bytes(8));
        $session->set('forgetPasswordCode', $forgetPasswordCode);
        $transport=Transport::fromDsn('smtp://piesprit91@gmail.com:etgrlloxvwswxyxz@smtp.gmail.com:587');
        // Create a new User object and set its properties
        $mailer = new Mailer($transport);
        $email=(new Email())
        ->from ('piesprit91@gmail.com')
        ->to($user->getEmail())
        //->to('azizrk19@gmail.com')
        ->subject('Email Verification')
        ->html($this->renderView('emails/signup.html.twig',['username' => $user->getUsername(),'verificationCode' =>  $forgetPasswordCode] // Replace 'John Doe' with the actual username
    ));

        $mailer->send($email);
        return $this->redirectToRoute('app_verifyPasswordCode');
    }

    #[Route('/verify', name: 'verify_code')]
public function verifyCode(Request $request, SessionInterface $session, UserRepository $userRepo): Response
{
    // Retrieve the verification code stored in the session
    $verificationCode = $session->get('verification_code');
    
    $form = $this->createForm(VerificationCodeType::class);
    $form->handleRequest($request);
    
    if ($form->isSubmitted() && $form->isValid()) {
        $formData = $form->getData();
        $verifCode = $formData['Code'];
    
        // Fetch the user entity from the session
        $user = $session->get('user');
        $user = $userRepo->findOneBy(['email' => $user->getEmail()]);
        // Compare the verification code with the one stored in the session
        if ($verifCode === $verificationCode) {
            // Update the existing user entity's verification status
            $user->setVerified(1);
    
            // Use EntityManagerInterface to persist and flush
            $this->entityManager->persist($user);
            $this->entityManager->flush(); // Flush the changes to the database
    
            // Verification successful
            return $this->redirectToRoute('login');
        } else {
            // Verification failed
            return new Response("Verification Failed");
        }
    }
    
    return $this->render('emails/Verif.html.twig', [
        'VerifFrom' => $form->createView(),
        'Label' => "Please enter the verification code sent to your e-mail"
    ]);
}


#[Route('/verifyPasswordCode', name: 'app_verifyPasswordCode')]
public function verifyPasswordCode(Request $request, SessionInterface $session, UserRepository $userRepo): Response
{
    // Retrieve the verification code stored in the session
    $verificationCode = $session->get('forgetPasswordCode');
    
    $form = $this->createForm(VerificationCodeType::class);
    $form->handleRequest($request);
    
    if ($form->isSubmitted() && $form->isValid()) {
        $formData = $form->getData();
        $verifCode = $formData['Code'];
    
        // Fetch the user entity from the session
        $user = $session->get('user');
        $user = $userRepo->findOneBy(['email' => $user->getEmail()]);
        // Compare the verification code with the one stored in the session
        if ($verifCode === $verificationCode) {
            return $this->redirectToRoute('app_ForgetPassword');
        } else {
            // Verification failed
            return new Response("Verification Failed");
        }
    }
    
    return $this->render('emails/Verif.html.twig', [
        'VerifFrom' => $form->createView(),
        'Label' => "Please enter your Verification code"
    ]);
}


#[Route('/claimEmail', name: 'app_claimEmail')]
public function claimEmail(Request $request, SessionInterface $session, UserRepository $userRepo): Response
{
    
       $form = $this->createForm(VerificationCodeType::class);
       $form->handleRequest($request);
       
       if ($form->isSubmitted() && $form->isValid()) {
           $formData = $form->getData();
           $verifCode = $formData['Code'];
       
           // Fetch the user entity from the session
           $user = $userRepo->findOneBy(['email' => $verifCode]);
           $session->set('user', $user);
           return $this->redirectToRoute('app_forgetPasswordEmail');
       }
       
       return $this->render('emails/Verif.html.twig', [
           'VerifFrom' => $form->createView(),
           'Label' => "Please enter your e-mail"
       ]);
   }



#[Route('/ForgetPassword', name: 'app_ForgetPassword')]
public function ForgetPassword(Request $request, SessionInterface $session, UserRepository $userRepo): Response
{
    $form = $this->createForm(VerifPasswordType::class);
    $form->handleRequest($request);
    
    if ($form->isSubmitted() && $form->isValid()) {
        $formData = $form->getData();
        $verifCode = $formData['Code'];
    
        // Fetch the user entity from the session
        $user = $session->get('user');
        $user = $userRepo->findOneBy(['email' => $user->getEmail()]);
       $user->setPassword(password_hash($verifCode, PASSWORD_DEFAULT));
       $this->entityManager->persist($user);
            $this->entityManager->flush(); 
            return $this->redirectToRoute('login');
    }
    
    return $this->render('emails/Verif.html.twig', [
        'VerifFrom' => $form->createView(),
        'Label' => "password"
    ]);
}
    
    
    
}
