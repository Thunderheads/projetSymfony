<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class WishController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */
    public function list(): Response
    {
        return $this->render('wish/list.html.twig', [
            'controller_name' => 'WishController',
            'titre' => 'Ma page'
        ]);
    }


    /**
     * @Route("/detail", name="detail")
     */
    public function detail(): Response
    {
        return $this->render('wish/detail.html.twig', [
            'controller_name' => 'WishController',
            'titre' => 'Ma page'
        ]);
    }
}
