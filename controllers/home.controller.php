<?php

function homeController(&$params, $action, $item_id) {
    $params["items"] = getMainItems();
    $template = "home";

    return render($template, $params);
}