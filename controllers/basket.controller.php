<?php

function basketController(&$params, $action, $item_id) {
    // echo "BASKET POST: " . var_dump($_GET);
    $params["items"] = getBasketItems(session_id());

    if (isset($_GET["delete"])) {
        $item_id = (int)$_GET["delete"];

        deleteFromBasket(session_id(), $item_id);
        header("Location: /basket");    
    }

    if ($action == "buy") {
        setOrder(session_id());
    }
    $template = "basket";

    return render($template, $params);
}