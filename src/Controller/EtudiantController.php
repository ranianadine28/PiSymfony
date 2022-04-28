<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
    /**
     * @Route("/etudiant", name="etudiant")
     */
    public function index(): Response
    {
        return $this->render('etudiant/index.html.twig', [
            'controller_name' => 'EtudiantController',
        ]);
    }
    /**
     * @return Response
     * @Route("/Affiche2/{nom}"
     *
     *
     *     ", name="affiche")
     */
    public function Affiche2($nom){
        return new Response('bonjour les amie'.$nom);
    }
    /**
     * @return Response
     * @Route("/Affiche4/{nom}"
     *
     *
     *
     *     , name="affiche")
     */
    public function Affiche4($nom){
        return $this->render('etudiant/index.html.twig',['n'=>$nom]);
    }
}
