<?php 
namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    #[Route('/contact', name: 'contact')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->addFlash('notice', 'Message envoyé, nous vous répondrons dans les plus brefs délais');
            $datas = $form->getData();
            $content = "De la part de : {$datas['firstname']} {$datas['lastname']} <br> Message : {$datas['content']} <br> Email: {$datas['email']}";
            
            $email = (new Email())
                ->from($datas['email'])
                ->to('ecommerce@gmail.com') // Your Mailtrap email
                ->subject('Contact visiteur E_Commerce')
                ->html($content);

            $this->mailer->send($email);
        }

        return $this->renderForm('contact/index.html.twig', [
            'form' => $form,
        ]);
    }
}
