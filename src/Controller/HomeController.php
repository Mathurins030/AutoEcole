<?php

namespace App\Controller;

use App\Entity\Formateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {

        $repo = $this->getDoctrine()->getRepository(Formateur::class);

        $formateurs = $repo->findAll();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'formateurs' => $formateurs,
        ]);
    }
}
