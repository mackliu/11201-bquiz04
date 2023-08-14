<?php
session_start();
date_default_timezone_set("Asia/Taipei");

include_once __DIR__ . "/controller/Bottom.php";

$Bottom=new Bottom;



function to($url){
    header("location:".$url);
}