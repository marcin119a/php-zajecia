<?php
include_once 'Controller.php';

class NewsController extends Controller{
    public function singleAction($id)
    {
        echo $this->twig->render('pages/news.single.twig', array('id' => $id));
    }
}