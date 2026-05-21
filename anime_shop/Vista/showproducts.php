<?php

require_once __DIR__ . "/../Database/Database.php";

$pdo = Database::getConnection();

$min = isset($_GET['min']) ? (float)$_GET['min'] : null;
$max = isset($_GET['max']) ? (float)$_GET['max'] : null;
$cats = $_GET['cat'] ?? [];

$sql = "SELECT * FROM products WHERE 1=1";
$params = [];

if ($min !== null && $min !== '') {
    $sql .= " AND price >= ?";
    $params[] = $min;
}

if ($max !== null && $max !== '') {
    $sql .= " AND price <= ?";
    $params[] = $max;
}

if (!empty($cats)) {
    $placeholders = implode(',', array_fill(0, count($cats), '?'));
    $sql .= " AND category IN ($placeholders)";
    $params = array_merge($params, $cats);
}

$stmt = $pdo->prepare($sql);
$stmt->execute($params);

$productos = $stmt->fetchAll();



foreach ($productos as $row) {

    echo "<div class='product-card'>";

    echo "<h2>" . htmlspecialchars($row['nameProduct']) . "</h2>";
    echo "<p>" . htmlspecialchars($row['description']) . "</p>";

    echo "<img src='/anime_shop/" . htmlspecialchars($row['image']) . "' width='150'><br>";

    echo "<strong>Precio: " . $row['price'] . " €</strong>";

    echo "<a class='btn-add' href='Controlador/addtocart.php?id=" . $row['idProduct'] . "'>
            Agregar al carrito
          </a>";

    echo "</div>";
}

?>
