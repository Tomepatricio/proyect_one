<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class CommentController extends AbstractController
{
    /**
     * @Route("/comment/{id}/votes/{direction<up|down>}", methods="POST")
     **/
    public function up_down_comment($id, $direction)
    {
        if ($direction === 'up') {
            $comment_score = rand(7, 100);
        }
        else{
            $comment_score = rand(0, 5);
        }

        return $this->json(['votes' => $comment_score]);
    }
}