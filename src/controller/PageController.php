<?php namespace Acme\Controller;

use Cocur\Slugify\Slugify;
use Acme\Models\Page as Page;
class PageController extends  BaseController
{
    public function  getShowHomePage(){
        //require __DIR__ . "/../../views/index.php";
        //echo $this->twig->render("index.html");
        echo $this->blade->render("index");
    }

    public function getShowPage(){
        // empty page tilte and content
        $browser_title = "";
        $page_content = "";

        // getting url string and setting it
        $url = explode('/',  $_SERVER["REQUEST_URI"]);
        $slugify = new Slugify();
        $target = $slugify->slugify($url[1]);
        echo $target;
        $content = Page::Where("slug", "=", $target)->get();

        print_r($content);
    }

}
