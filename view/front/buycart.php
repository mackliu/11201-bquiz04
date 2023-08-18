<?php

if(isset($_GET['id']) && isset($_GET['qt'])){
    $_SESSION['cart'][$_GET['id']]=$_GET['qt'];
}

if(!isset($_SESSION['user'])){
    to("?do=login");
}

echo "<h1 class='ct'>{$_SESSION['user']}的購物車</h2>";

if(isset($_SESSION['cart'])){


    
}else{
    echo "<h2 class='ct'>你的購物車中目前沒有商品，請前往賣場購買</h2>";
}