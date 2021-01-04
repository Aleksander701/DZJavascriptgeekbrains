<?php
include dirname(__DIR__) . "/engine/db.php";
// include dirname(__DIR__) . "/config/config.php";

// $file = json_decode($_GET);

// var_dump($_POST);

// json_encode(var_dump($file));

// $images = getResponseArray("SELECT images FROM items W")

$result = [
    "menu" => "link",
    "body" => "body"
];
header("Content-Type: application/json");

json_encode($result);