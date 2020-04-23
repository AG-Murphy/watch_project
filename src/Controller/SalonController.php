<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SalonController extends AbstractController
{
    /**
     * @Route("/salon", name="salon")
     */
    public function index()
    {
        return $this->render('salon/index.html.twig', [
            'controller_name' => 'SalonController',
        ]);
    }
}
