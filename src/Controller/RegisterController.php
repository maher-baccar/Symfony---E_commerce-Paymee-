<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Security\LoginAuthenticator; // Import the LoginAuthenticator service

class RegisterController extends AbstractController
{
    #[Route('/inscription', name: 'register')]
    public function index(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, EntityManagerInterface $em, MailerInterface $mailer, LoginAuthenticator $authenticator): Response
    {
        $user = new User();

        $form = $this->createForm(RegisterType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword($userPasswordHasher->hashPassword($user, $form->get('password')->getData()));

            $em->persist($user);
            $em->flush();

            // Envoi mail confirmation
            $content = "Bonjour {$user->getFirstname()} nous vous remercions de votre inscription";
            $email = (new Email())
                ->from('your@email.com') // Replace with the sender's email
                ->to($user->getEmail())
                ->subject('Bienvenue sur E_Commerce')
                ->html($content);

            $mailer->send($email);

            // Logging auto
            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
        }

        return $this->renderForm('register/index.html.twig', [
            'form' => $form,
        ]);
    }
}
