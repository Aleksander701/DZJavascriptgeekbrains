<?php

function getDb() {

    static $db = null;

    if (is_null($db)) {
        $db = @mysqli_connect(HOST, USERNAME, PASSWORD, DB) or die('Probably server is broken... Like my heart:(( ' . mysqli_connect_error());
    }
    return $db;
}



function getResponseArray($req) {
    $result = @mysqli_query(getDb(), $req) or die("Someday we'll be together!!!");

    $result_arr = [];

    while($val =  mysqli_fetch_assoc($result)) {
        $result_arr[] = $val;
    }

    return $result_arr;
}

function getResponse($req) {
    @mysqli_query(getDb(), $req);

    return mysqli_affected_rows(getDb(), $req);
}