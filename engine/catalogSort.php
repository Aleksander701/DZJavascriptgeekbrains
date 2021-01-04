<?php

function sortPopular() {
    return getResponseArray("SELECT * FROM items WHERE 1 ORDER BY rating");
}

function sortAscending() {
    return getResponseArray("SELECT * FROM items WHERE 1 ORDER BY price");
}

function sortByDecreasing() {
    return getResponseArray("SELECT * FROM items WHERE 1 ORDER BY rating DESC");
}