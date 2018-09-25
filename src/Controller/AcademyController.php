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
     * @Route("/academy", name="academy")
     */
    public function academy()
    {
        return $this->json([
            'message' => 'Welcome to your new controller academy!',
            'path' => 'src/Controller/AcademyController.php',
        ]);
    }
}
