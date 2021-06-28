<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GeneralController extends AbstractController
{
    /**
     * @Route("/{any}")
     */

    public function homepage()
    {
        return new Response($this->render('home.html.twig'));
        //return $this->render('/home.html.tiwg');
    }

    /**
     * @Route("/question/{show}")
     */

    public function show($show)
    {

        $answers = [
            'Respuesta N°1',
            'Respuesta N°2',
            'Respuesta N°3'
        ];

//        dump($this);
//        dd($this); dump and die

        return $this->render('/show.html.twig', [
            'questions' => ucwords(str_replace('-',' ', $show)),
            'answers' => $answers
        ]);

//        return new Response(sprintf(
//            'This is another part of the page that we are going to: "%s"!',
//            ucwords(str_replace('-',' ', $show))));
//    }
    }

    /**
     * @Route("/tutorial/{show}")
     */
    public function tutorial_show($show)
    {
        $answers = [
            'Respuesta del tutorial N°1',
            'Respuesta del tutorial N°2',
            'Respuesta del tutorial N°3'
        ];

        return $this->render('/tutorial_show.html.twig', [
            'question' => ucwords(str_replace('-',' ', $show)),
            'answers' => $answers
        ]);
    }
}