<?php

/*
 * 
 */

declare(strict_types=1);

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


// PDF Creation 
use Dompdf\Dompdf;
use Dompdf\Options;

class GestionEmailController extends AbstractController
{

    /**
     * ProjectController constructor.
     */
    public function __construct()
    {
       
    }
    


    /**
     * Envoi du mail de confirmation
     *
     * @return Response_for_email_sent
     * @Route("/sendEmailConfirm/", name="email_confirm")
     */
    public function envoiEmailConfirmation(Request $request, \Swift_Mailer $mailer)
    {
        $content = json_decode($request->getContent(), true);
        if ($content['firstName']  && isset($content['email'] ) && isset($content['message'] )  && isset($content['sujet'] ) ){
            $name = $content['firstName'];
            // CREATION IMAGE PDF64
            $path = 'https://packref.seopowa.com/img/logo.jpg';
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

            // Configure Dompdf according to your needs
            $pdfOptions = new Options();
            $pdfOptions->set('defaultFont', 'Arial');
            // Instantiate Dompdf with our options
            $dompdf = new Dompdf($pdfOptions);
            // Retrieve the HTML generated in our twig file
            $html = $this->renderView('emails/pdf.html.twig',['name' => $name, 'imageconvertie'  =>$base64]);
            // Load HTML to Dompdf
            $dompdf->loadHtml($html);
            // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
            $dompdf->setPaper('A4', 'portrait');
            // Render the HTML as PDF
            $dompdf->render();
            // Store PDF Binary Data
            $output = $dompdf->output();

            // EMAIL DE CONFIRMATION :::
        
            $message = (new \Swift_Message('On vous contacte sur heroku !'))
            ->setSubject('My subject')
            ->setFrom('figurinaka@gmail.com')
            ->setTo('luidgi-clairboy@live.fr')
            ->setBody(
                $this->renderView(
                    // templates/emails/registration.html.twig
                    'emails/registration.html.twig',
                    ['name' => $name, 'email' => $content['email'], 'message' => $content['message'], 'sujet' => $content['sujet'],'imageconvertie' => $base64]
                ),
                'text/html'
            );
    
            // Create the attachment with your data
            $attachment = new \Swift_Attachment($output, 'mon-fichier-joint.pdf', 'application/pdf');
            // Attach it to the message
            $message->attach($attachment);

            $mailer->send($message);

            $response = new Response(
                'ok',
                Response::HTTP_OK,
                ['content-type' => 'application/json']
            );
            return $response;
        }

        return new Response('Error', Response::HTTP_INTERNAL_SERVER_ERROR);
    }   

}