<?php

function loginController(&$params, &$action, $item_id) {
    echo "POST: " . var_dump($_POST);   
    echo "SESSION: " . var_dump($_SESSION);   
    echo "ACTION: " . var_dump($action);  

    if (!empty($_POST)) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(auth($username, $password)) {
            if(isset($_POST["seve"])) {
                $hash = uniqid(rand(), true);
                $id = checkValue($_SESSION["id"]);
                $result = getResponse("UPDATE users SET hash={$hash} WHERE id={$id}");

                setCookie("hash", $hash, time() + 3600, "/");
            }
            header("Location: /");
            die();
        }
    }


    // switch ($action) {
    //     case "login": 
    //         $template = "login";
    //         if (!empty($_POST)) {
    //             $username = $_POST["username"];
    //             $password = $_POST["password"];
        
    //             if(auth($username, $password)) {
    //                 if(isset($_POST["seve"])) {
    //                     $hash = uniqid(rand(), true);
    //                     $id = checkValue($_SESSION["id"]);
    //                     $result = getResponse("UPDATE users SET hash={$hash} WHERE id={$id}");
        
    //                     setCookie("hash", $hash, time() + 3600, "/");
    //                 }
    //                 header("Location: /");
    //                 die();
    //             }
    //         }
    //     case "register":
    //         if(isset($_POST)) {
    //             $username = $_POST["username"];
    //             $password = $_POST["password"];
        
    //             // if ($action == "send") {
    //                 register($username, $password);
    //                 header("Location: /login");
    //                 die();
    //             // }
    //         }
    //         $template = "register";
    //     case "logout":
    //         if (isset($_GET["logout"])) {
    //             session_destroy();
    //             setcookie("hash", "", time() - 36000, '/');
    //             $url = substr($_SERVER["REQUEST_URI"], 0, -1);
    //             echo "URL: " . $url;
    //             return header("Location: " . $url);
    //         }
    // }

    $template = "login";
    return render($template, $params);
}