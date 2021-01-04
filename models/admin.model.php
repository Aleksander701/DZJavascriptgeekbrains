<?php

function is_admin () {
    if ($_SESSION) {
        return $_SESSION["status"] == 1 ? true : false;    
    } else {
        return false;   
    }
}