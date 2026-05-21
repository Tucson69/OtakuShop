<?php
session_start();

$id = $_GET["id"];

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

// si ya existe, aumenta cantidad
if (isset($_SESSION["cart"][$id])) {
    $_SESSION["cart"][$id]++;
} else {
    $_SESSION["cart"][$id] = 1;
}

header("Location: /anime_shop/index.php");
exit;