<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GenNameController extends AbstractController
{
    /**
     * @Route("/", name="gen_name")
     */
    public function index()
    {
        return $this->render('gen_name/index.html.twig', [
            'controller_name' => 'GenNameController',
        ]);
    }
}
