<?php
require_once 'Controller.php';

class HomeController extends Controller {

    public function indexAction($name)
    {
        print  $this->twig->render('pages/home.page.twig', array('name' => $name));
    }

}