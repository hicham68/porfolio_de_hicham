<?php

/*
 * 
 */

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mime\Email;

class MailerController extends AbstractController
{

      /**
     * Envoi du mail de confirmation
     *
     * @return Response_for_email_sent
     * @Route("/email/")
     */
    public function sendEmail(Request $request, MailerInterface $mailer): Response
    {
        $email = (new Email())
            ->from('hello@example.com')
            ->to('hichampro68@gmail.com')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>');

        $mailer->send($email);
        $response = new Response(
            'ok',
            Response::HTTP_OK,
            ['content-type' => 'application/json']
        );
        return $response;
        // ...
    }
}