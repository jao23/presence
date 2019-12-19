<?php


namespace App\Controller;

use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Employee;
use App\Entity\Presence;
use App\Entity\Temps;

class AbsenceController extends AbstractController
{
    /**
     * @Route("/absence", name="absence")
     */
    public function index()
    {
        return $this->render('absence/index.html.twig', [
            'controller_name' => 'AbsenceController',
        ]);
    }
}
