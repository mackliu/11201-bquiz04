<?php
include_once "DB.php";

class Type extends DB{
    function __construct()
    {
        parent::__construct('types');
    }
}