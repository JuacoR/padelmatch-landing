<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(): BinaryFileResponse
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/public/index.html';

        return new BinaryFileResponse($filePath);
    }
}
