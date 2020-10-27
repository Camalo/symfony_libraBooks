<?php

namespace App\Controller;

use App\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    /**
     * @Route("/book", name="book")
     */
    public function index(): Response
    {

        $repository=$this->getDoctrine()->getRepository(Book::class);

        $books = $repository->findAll();

        
        return $this->render('book/index.html.twig', [
           'book_title' => $books[0]->getTitle()
        ]);
    }
    /*
    public function show_books()
    {
        $repository=$this->getDoctrine()->getRepository(Book::class);

        $books=$repository->findAll();
    }*/
}
