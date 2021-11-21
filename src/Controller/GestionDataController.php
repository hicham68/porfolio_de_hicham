<?php

/*
 * 
 */

declare(strict_types=1);

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class GestionDataController extends AbstractController
{
    private $entityManager;

    /**
     * ProjectController constructor.
     */
    public function __construct( )
    {
        // $this->entityManager = $entityManager;
        
    }
    
    /**
     * @Route("/john", name="gestionnaire_professeur")
     */
    public function getList()
    {
        return $this->render('index/index.html.twig');
    }

}