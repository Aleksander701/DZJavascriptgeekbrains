<?php

function isAuth() {
    if (isset($_COOKIE["hash"])) {
        $hash = $_COOKIE["hash"];
        $result = getResponse("SELECT FROM users WHERE hash={$hash}");
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $user = $row["username"];
            if (!empty($user)) {
                $_SESSION["username"] = $user;
            }
        }
    }
    return isset($_SESSION["username"]);
}


function auth($username, $password) {
    $username = checkValue($username);
    $password = checkValue($password);

    $row = getResponseArray("SELECT * FROM users WHERE username='{$username}'")[0];

    // $pass = getResponse("SELECT * FROM users WH")

    if(password_verify($password, $row["password"])) {
        $_SESSION["username"] = $username;
        $_SESSION["id"] = $row["id"];
        $_SESSION["status"] = $row["pass"];

        return true;
    }
    return false;
}

function register($username, $password) {
    $username = checkValue($username);
    $password = checkValue($password);

    $password = password_hash($password, PASSWORD_DEFAULT);

    echo $password . $username;

    return getResponse("INSERT INTO users (username, password) VALUES ('{$username}', '{$password}')");
}

if (isset($_GET["logout"])) {
    var_dump($_GET);
    setcookie("hash", "", time() -1, "/");
    session_destroy();
    Header("Location: /");
    die();
}