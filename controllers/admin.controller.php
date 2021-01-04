<?php

function adminController(&$params, $action, $item_id) {
    if (!is_admin()) {
        die("Something went wrong");
    }
    if (empty($action)) {
        $action = "admin";
    }

    switch($action) {
        case "admin":
            $params["orders"] = getOrders();
            break;
        case "details":
            $item_id = $_GET["item_id"];
            $params["basket"] = getOneOrder($item_id);
            break;
    }
}