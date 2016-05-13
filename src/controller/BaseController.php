<?php

namespace Acme\Controller;

use duncan3dc\Laravel\BladeInstance as BladeInstance;

class BaseController
{
//    protected  $loader;
//    protected  $twig;
//    protected  $filedir;
//    public function __construct()
//    {
//        $this->filedir = DIRECTORY_SEPARATOR;
//        $this->loader = new  \Twig_Loader_Filesystem(__DIR__ . "/../../views");
//        $this->twig = new \Twig_Environment($this->loader, [
//            'cache' => false  , "debug" => true
//        ]);
//    }
//}
    protected  $blade;

    public function __construct()
    {

        $this->blade = new BladeInstance(__DIR__ . "/../../views", __DIR__ . "/../../cache");

    }
}