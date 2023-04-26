<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MontrehommeController extends AbstractController
{
    /**
     * @Route("/montrehomme", name="app_montrehomme")
     */
    public function index(): Response
    {
        return $this->render('montrehomme/index.html.twig', [
            'controller_name' => 'MontrehommeController',
        ]);
    }
}
