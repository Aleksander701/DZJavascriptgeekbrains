<?php

function registerController($params, $action, $item_id) {
    if(isset($_POST)) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // if ($action == "send") {
            register($username, $password);
            header("Location: /login");
            die();
        // }
    }

    $template = "register";
    return render($template, $params);
}