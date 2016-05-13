<?php namespace Acme\Controller;



class PageController extends  BaseController
{
    public function  getShowHomePage(){
        //require __DIR__ . "/../../views/index.php";
        //echo $this->twig->render("index.html");
        echo $this->blade->render("index");
    }


}
