<?php

include_once "DB.php";
class User extends DB{
    function __construct()
    {
        parent::__construct('users');
    }

}