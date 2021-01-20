<?php

namespace App\Controller;

use App\Repository\HumanRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HumanController extends AbstractController
{
    /**
     * @Route("/human", name="human")
     */
    public function index(HumanRepository $humanRepository)
    {
        $human1 = $humanRepository->findRandom();
        $human2 = $humanRepository->findRandom();

        return $this->render('human/index.html.twig', [
            'human1' => $human1,
            'human2' => $human2
        ]);
    }
}
