<?php

require_once "../Database/Database.php";

$pdo = Database::getConnection();

$nameProduct = $_POST['nameProduct'] ?? '';
$description = $_POST['description'] ?? '';
$price = $_POST['price'] ?? 0;

/* =========================
   VALIDACIÓN IMAGEN
========================= */

if (!isset($_FILES['image']) || $_FILES['image']['error'] !== 0) {
    die("Error: imagen no válida");
}

$imagenTemp = $_FILES['image']['tmp_name'];

/* nombre único */
$imagenNombre = time() . "_" . basename($_FILES['image']['name']);

/* carpeta pública */
$rutaCarpeta = "../Images-Anime/";
$rutaFinal = $rutaCarpeta . $imagenNombre;

if (!move_uploaded_file($imagenTemp, $rutaFinal)) {
    die("Error subiendo imagen");
}

/* ruta que se guarda en BD */
$rutaBD = "Images-Anime/" . $imagenNombre;

/* =========================
   INSERT
========================= */

$stmt = $pdo->prepare("
    INSERT INTO products (nameProduct, description, image, price)
    VALUES (:name, :description, :image, :price)
");

$stmt->execute([
    "name" => $nameProduct,
    "description" => $description,
    "image" => $rutaBD,
    "price" => $price
]);

echo "Producto agregado correctamente";