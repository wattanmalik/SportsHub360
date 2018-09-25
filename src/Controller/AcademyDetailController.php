<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AcademyDetailController extends AbstractController
{
    /**
     * @Route("/academy/detail", name="academy_detail")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/AcademyDetailController.php',
        ]);
    }
}
