<?php
session_start();

error_reporting(E_ERROR | E_WARNING | E_PARSE);

require dirname(__DIR__) . "/config/config.php";


$url_array = explode('/', $_SERVER['REQUEST_URI']);
$item_id = $url_array[2];
$action = $url_array[3];

if ($url_array[1] == "") {
    $page = 'home';
} else {
    $page = $url_array[1];
}

// echo "ACTION: " .  substr($_SERVER["REQUEST_URI"], 0, -1);;

if (isAuth()) {
    $params["auth"] = true;
    $params["username"] = $_SESSION["username"];
}

if ($_SESSION["status"]) {
    $params["status"] = $_SESSION["status"];
}

$controller = $page . "Controller";

if(function_exists($controller)) {
    echo $controller($params, $action, $item_id);
} else {
    echo "FALSE";
}