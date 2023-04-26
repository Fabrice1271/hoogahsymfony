<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MarquesController extends AbstractController
{
    /**
     * @Route("/marques", name="app_marques")
     */
    public function index(): Response
    {
        return $this->render('marques/index.html.twig', [
            'controller_name' => 'MarquesController',
        ]);
    }
}
