<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class NumbController
{
    /**
     * @Route("/numb", name="numb")
     */
    public function index(Request $request): Response
    {
        $greet ='';
        if ($name = $request->query->get('hello')) {
                        $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
                 }
        return new Response(" <html><body>$greet<img src='/images/under-construction.gif' /></body></html>");

    }
}
