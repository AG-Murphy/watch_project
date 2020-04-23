<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MeetupController extends AbstractController
{
    /**
     * @Route("/meetup", name="meetup")
     */
    public function index()
    {
        return $this->render('meetup/index.html.twig', [
            'controller_name' => 'MeetupController',
        ]);
    }
}
