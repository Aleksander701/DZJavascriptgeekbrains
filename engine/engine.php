<?php

function autoloader($catalog) {
    $arr = array_splice(scandir(ROOT . "/" . $catalog . "/"), 2);
    foreach ($arr as $value) {
        $filename = ROOT . "/" . $catalog . "/" . $value;
        include $filename;
    }
}

function checkValue($value) {
    $checked = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $value)));

    return $checked;
}


function render($page, $params = []) {
    return renderTemplates(LAYOUTS_DIR . "main", [
        "menu" => renderTemplates("menu"),
        "content" => renderTemplates($page, $params),
    ]);
}



function renderTemplates($page, $params = []) {

    ob_start();

    if (!is_null($params)) {
        foreach($params as $key => $value) {
            $$key = $value;
        }
    }
    // if (!is_null($params))
        // extract($params);

    $file_name = TEMPLATES_DIR .  $page . ".php";

    if(file_exists($file_name)) {
        include $file_name;
    } else {
        die('¯\_(ツ)_/¯');
    }
    return ob_get_clean();
}