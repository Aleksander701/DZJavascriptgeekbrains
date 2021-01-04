<?php

function itemController(&$params, $action, $item_id) {
    $id = (int)$item_id;
    $params["item"] = getOneItem($id)[0];
    $params["feedbacks"] = getFeedbacks($id);
    $session_id = session_id();

    switch ($action) {
        case "add":
            addToBasket($session_id, $id);
            header("Location: /item/{$id}");
        case "feedback":
            $author = $_POST["author"];
            $feedback_text = $_POST["feedback"];
            leaveFeedback($id, $feedback_text, $author);
            header("Location: /item/{$id}");
    }
    
    $template = "item";

    return render($template, $params);

}