<?php

function ordersController($params, $action, $item_id) {
    $params["items"] = getOrders();

    $template = "basket";
    return render($template, $params);
}