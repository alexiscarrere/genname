<?php

namespace App\Controller;

use App\Repository\ElveRepository;
use Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\ElementFlagParser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ElfController extends AbstractController
{
    /**
     * @Route("/elf", name="elf")
     */
    public function index(ElveRepository $elveRepository)
    {
        $elf1 = $elveRepository->findRandom();
        $elf2 = $elveRepository->findRandom();

        return $this->render('elf/index.html.twig', [
            'elf1' => $elf1,
            'elf2' => $elf2
        ]);
    }
}
