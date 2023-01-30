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
                'rating' => 40,
                'author' => [
                    'name' => 'Jean Dupont',
                    'avatar' => 'https://randomuser.me/api/portraits/men/30.jpg',
                ],
                'nbrOfResponse' => 15
            ],
            [
                'title' => 'Le titre de ma question',
                'content' => 'le contenue de ma question j\'aurais pu mettre un lorem d\'ailleurs',
                'rating' => 8,
                'author' => [
                    'name' => 'Alexandre Astier',
                    'avatar' => 'https://randomuser.me/api/portraits/men/6.jpg',
                ],
                'nbrOfResponse' => 2
            ],
            [
                'title' => 'Le titre de ma question',
                'content' => 'le contenue de ma question j\'aurais pu mettre un lorem d\'ailleurs',
                'rating' => 489,
                'author' => [
                    'name' => 'David le sang',
                    'avatar' => 'https://randomuser.me/api/portraits/men/45.jpg',
                ],
                'nbrOfResponse' => 54
            ],
            [
                'title' => 'Le titre de ma question',
                'content' => 'le contenue de ma question j\'aurais pu mettre un lorem d\'ailleurs',
                'rating' => 24,
                'author' => [
                    'name' => 'Lara Croft',
                    'avatar' => 'https://randomuser.me/api/portraits/women/12.jpg',
                ],
                'nbrOfResponse' => 32
            ],
        ];

        return $this->render('home/index.html.twig', [
            'questions' => $questions,
        ]);
    }
}
