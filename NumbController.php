<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NumbController
{
    /**
     * @Route("/numb", name="numb")
     */
    public function index(): Response
    {
        $num = mt_rand(0,100);

        
        return $this->render('numb.html.twig', array('number' => $num ));
    }
}
