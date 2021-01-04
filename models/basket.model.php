<?php

function getBasketItems($session_id) {
    $session_id = checkValue($session_id);
    return getResponseArray("SELECT * FROM items RIGHT JOIN basket ON (items.id = basket.item) WHERE (session_id='{$session_id}')");
    
}

function addToBasket($session_id, $item) {
    $item = checkValue($item);
    return getResponse("INSERT INTO basket (session_id, item) VALUE ('{$session_id}', {$item})");
}

function deleteFromBasket ($session_id, $item_id) {
    $item_id = checkValue($item_id);
    return getResponse("DELETE FROM basket WHERE item={$item_id} AND session_id='{$session_id}'");
}