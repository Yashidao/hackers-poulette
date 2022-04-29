<?php
require "index.php";

function createAt(){
    $date = new DateTime("now");
    $dates = date_format($date, "d/m/Y H:i:s");
    return $dates;
}