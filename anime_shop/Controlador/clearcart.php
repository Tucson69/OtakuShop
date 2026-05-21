<?php
session_start();

$id = $_GET["id"];

if (isset($_SESSION["cart"])) {
    unset($_SESSION["cart"]);
}

header("Location: /anime_shop/shoppingcart.php");
exit;