<?php

namespace App\Controller;

use App\Entity\Dwarf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\DwarfRepository;
use Doctrine\DBAL\Tools\Dumper;

class DwarfController extends AbstractController
{
    /**
     * @Route("/dwarf", name="dwarf")
     */
    public function index(DwarfRepository $dwarfRepository)
    {
        $dwarf1= $dwarfRepository->findRandom();
        $dwarf2= $dwarfRepository->findRandom();
        
        
        return $this->render('dwarf/index.html.twig', [
            'dwarf1' => $dwarf1,
            'dwarf2' =>$dwarf2
        ]);
    }
}
