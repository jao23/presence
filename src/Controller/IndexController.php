<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    public function __construct()
    {
    }

    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        if($this->getUser() == null){
            return $this->redirectToRoute('connexion');
        }
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
