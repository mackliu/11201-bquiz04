<?php
include_once "DB.php";

class Order extends DB{
    function __construct()
    {
        parent::__construct('orders');
    }

}