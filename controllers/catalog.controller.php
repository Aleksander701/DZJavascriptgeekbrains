<?php

function catalogController(&$params, $action, $item_id) {
    $params["items"] = getItems();
    $template = "catalog";

    return render($template, $params);
}