<?php

function logoutController($params, $action, $item_id) {
    if (isset($_GET["logout"])) {
        session_destroy();
        setcookie("hash", "", time() - 36000, '/');
        $url = substr($_SERVER["REQUEST_URI"], 0, -1);
        echo "URL: " . $url;
        return header("Location: " . $url);
    }
}