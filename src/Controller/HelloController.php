<?php

namespace App\Controller;

use Twig\Environment;
use App\Taxes\Calculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     *  @Route("/hello/{prenom?world}", name="hello")
     */
    public function hello($prenom, Environment $twig)
    {
        return $this->render('hello.html.twig',[
            'prenom' => $prenom
        ]);
    }
}