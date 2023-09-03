<?php

namespace App\Controller;
use App\Entity\Order;
use App\Model\Cart;
use App\Repository\OrderRepository;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;

class PaymentController extends AbstractController
{
    #[Route('/commande/checkout/{reference}', name: 'checkout')]
    public function payment(OrderRepository $repository, $reference, EntityManagerInterface $em): Response
    {
        $order = $repository->findOneByReference($reference);
        if (!$order) {
            throw $this->createNotFoundException('Cette commande n\'existe pas');
        }
        $products = $order->getOrderDetails()->getValues();
        $totals = $order->getCarrierPrice();
        foreach ($products as $item) {
            $priceByArticle=0;
            $priceByArticle=$item->getPrice()*$item->getQuantity();
            $totals= $totals+ $priceByArticle;  
        }
        $user = $this->getUser();
        // Step 1: Create a Payment in Paymee
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Token your_token',
        ];
        $order_id=$order->getId();
        $postData = [
            
            'amount' => $totals/100, // Replace with your desired amount
            'note' => "Order ".$order_id,
            'first_name' => $user->getFirstName(),
            'last_name' => ' '.$user->getLastName(),
            'email' => $user->getEmail(),
            'return_url' => "https://127.0.0.1:8000/commande/valide/$order_id",
            'cancel_url' => "https://127.0.0.1:8000/mon-panier",
            'webhook_url' => "https://www.webhook_url.tn",
            'order_id' => $order_id,
        ];

        $httpClient = HttpClient::create();
        $response = $httpClient->request('POST', 'https://sandbox.paymee.tn/api/v2/payments/create', [
            'headers' => $headers,
            'json' => $postData,
        ]);

        $responseData = $response->toArray();

        if (!isset($responseData['data']['payment_url'])) {
            // Handle error here
        }

        $paymeePaymentUrl = $responseData['data']['payment_url'];

        return $this->redirect($paymeePaymentUrl);
    }

    #[Route('/commande/valide/{order_id}', name: 'payment_success')]
    public function paymentSuccess(Request $request,OrderRepository $repository,$order_id, EntityManagerInterface $em, Cart $cart, MailerInterface $mailer) : Response
    {
        $order = $repository->findOneById($order_id);

        $payment_token=$request->query->get('payment_token');
        $transaction_id=$request->query->get('transaction');
        $order->setPaymentToken($payment_token);
        $order->setTransactionId($transaction_id);
        $order->setState(1);
        $em->persist($order);
        $em->flush();
        $user = $this->getUser();

        $content = "Bonjour {$user->getFirstname()} nous vous remercions de votre commande";

        $email = (new Email())
            ->from('your@email.com')
            ->to($user->getEmail())
            ->subject("Confirmation de la commande {$order->getReference()}")
            ->text($content);

        $mailer->send($email);

        // Suppression du panier une fois la commande validée
        $cart->remove();    
        return $this->render('payment/success.html.twig', [
            'order' => $order
        ]);    
    }
}
