<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GeneralController extends AbstractController
{
    /**
     * @Route("/")
     */

    public function homepage()
    {
        return new Response('This is a Demostration');
    }

    /**
     * @Route("/{show}")
     */

    public function show($show)
    {

        $answers = [
            'Respuesta N°1',
            'Respuesta N°2',
            'Respuesta N°3'
        ];

        return $this->render('/show.html.twig', [
            'questions' => ucwords(str_replace('-',' ', $show)),
            'answers' => $answers
        ]);

//        return new Response(sprintf(
//            'This is another part of the page that we are going to: "%s"!',
//            ucwords(str_replace('-',' ', $show))));
//    }
    }
}