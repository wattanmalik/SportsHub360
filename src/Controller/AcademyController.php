<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AcademyController extends AbstractController
{
    // public function index()
    // {
    //     return $this->json([
    //         'message' => 'Welcome to your new controller!',
    //         'path' => 'src/Controller/AcademyController.php',
    //     ]);
    // }

    /**
     * @Route("/academy/new", name="new_academy")
     */
    public function new()
    {
        return $this->json([
            'message' => 'Welcome to your new controller academy!',
            'path' => 'src/Controller/AcademyController.php',
        ]);
    }
}
