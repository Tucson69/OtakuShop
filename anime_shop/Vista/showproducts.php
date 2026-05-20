<?php

require_once __DIR__ . "/../Database/Database.php";

$pdo = Database::getConnection();

$stmt = $pdo->query("SELECT * FROM products");
$productos = $stmt->fetchAll();

echo "<h1>Lista de productos</h1>";

foreach ($productos as $row) {
    echo "<div style='border:1px solid #ccc; padding:10px; margin:10px;'>";

    echo "<h2>" . htmlspecialchars($row['nameProduct']) . "</h2>";
    echo "<p>" . htmlspecialchars($row['description']) . "</p>";

     echo "<img src='/anime_shop/" . htmlspecialchars($row['image']) . "' width='150'><br>";

    echo "<strong>Precio: " . $row['price'] . " €</strong>";

    echo "</div>";
}