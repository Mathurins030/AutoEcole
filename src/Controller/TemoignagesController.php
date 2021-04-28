<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TemoignagesController extends AbstractController
{
    /**
     * @Route("/temoignages", name="temoignages")
     */
    public function index(): Response
    {
        return $this->render('temoignages/index.html.twig', [
            'controller_name' => 'TemoignagesController',
        ]);
    }
}
