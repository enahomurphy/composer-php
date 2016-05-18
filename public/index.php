<?php
$controller = null;
$method = null;
require __DIR__ . "/../bootstrap/start.php";

Dotenv::load(__DIR__ . "/../");

require __DIR__ . "/../bootstrap/db.php";
require __DIR__ . "/../routes.php";

$match = $router->match();
//var_dump($match);
//check if match target is a string or function
if(is_string($match["target"])) {
    list ($controller, $method) = explode("@", $match['target']);
}
if($controller != null && $method != null){
    $object = new $controller();
    call_user_func_array(array($object, $method), array($match['params']));
}else if(is_callable($match["target"])){
    call_user_func_array($match["target"], $match["params"]);
}else{
    echo "cannot find url " . $match;
    exit();
}
