<?php

function getOrders() {
    return getResponseArray("SELECT * FRON orders WHERE 1 ORDER BY order_id");
}

function getOneOrder($session_id) {
    return getResponseArray("SELECT * FROM orders WHERE session_id={$session_id}");
}

function setOrder($session_id) {
    return getResponse("INSERT TABLE orders (session_id) VALUES ({$session_id})");
}