<?php

function getItems() {
    return getResponseArray("SELECT * FROM items WHERE 1 ORDER BY rating");
}

function getMainItems() {
    return getResponseArray("SELECT * FROM items WHERE 1 ORDER BY rating LIMIT 5");
}

function getOneItem($item_id) {
    $item_id = checkValue($item_id);
    return getResponseArray("SELECT * FROM items WHERE id={$item_id}");
}

function getItemImages($item_id) {
    $item_id = checkValue($item_id);
    return getResponse("SELECT imeges FROM items WHERE id={$item_id}");
}