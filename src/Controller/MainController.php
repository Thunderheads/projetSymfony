<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

//on peut declarer des constantes mais en dehors de la classe 
const MA_CONSTANTE = 'Ma page' ;

class MainController extends AbstractController
{
   
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('main/home.html.twig', 
        [
            'titre' => MA_CONSTANTE
        ]);
    }

    /**
     * @Route("/About_Us/", name="aboutUs")
     */
    public function aboutUs(): Response
    {
        
        return $this->render('main/about_us.html.twig',
        [
            'titre' => MA_CONSTANTE
        ]);
    }

    
}
