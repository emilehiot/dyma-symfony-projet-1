<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $questions = [
            [
                'title' => 'Le titre de ma question',
                'content' => 'le contenue de ma question j\'aurais pu mettre un lorem d\'ailleurs',
                
            ],
        ];

        return $this->render('home/index.html.twig', [
            'questions' => $questions,
        ]);
    }
}
