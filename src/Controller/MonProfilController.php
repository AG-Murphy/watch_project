<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MonProfilController extends AbstractController
{
    /**
     * @Route("/mon/profil", name="mon_profil")
     */
    public function index()
    {
        return $this->render('mon_profil/index.html.twig', [
            'controller_name' => 'MonProfilController',
        ]);
    }
}
