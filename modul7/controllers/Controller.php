<?php


class Controller {
    public $twig;
    public $loader;

    public function __construct()
    {
       $this->twig = $this->runTwig();
    }

    public function runTwig()
    {
        Twig_Autoloader::register();
        $this->loader = new Twig_Loader_Filesystem('views/');
        return new Twig_Environment($this->loader, array('debug' => true));
    }

}