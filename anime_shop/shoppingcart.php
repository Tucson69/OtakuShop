<?php
session_start();
require_once "Database/Database.php";

$pdo = Database::getConnection();

$cart = $_SESSION["cart"] ?? [];
$total = 0;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="shoppingcartStyle.css">
    <title>Tu carrito</title>
</head>
<body>

<div class="cart">

    <h1>Tu carrito 🛒</h1>

<?php if (empty($cart)) { ?>

    <div class="empty-cart">
        El carrito está vacío 🛒
    </div>

<?php } else { ?>

    <?php foreach ($cart as $id => $qty) { ?>

        <?php
        $stmt = $pdo->prepare("SELECT * FROM products WHERE idProduct = ?");
        $stmt->execute([$id]);
        $product = $stmt->fetch();

        if ($product) {
            $subtotal = $product["price"] * $qty;
            $total += $subtotal;
        ?>

        <div class="cart-item">

            <div class="item-info">

                <h3><?php echo htmlspecialchars($product["nameProduct"]); ?></h3>

                <p>Cantidad: <?php echo $qty; ?></p>

                <p>Precio unitario: <?php echo $product["price"]; ?> €</p>

                <p>Subtotal: <?php echo $subtotal; ?> €</p>

            </div>

            <div class="item-actions">
                <a href="Controlador/removefromcart.php?id=<?php echo $id; ?>">
                    Eliminar
                </a>
            </div>

        </div>

        <?php } ?>

    <?php } ?>

    <div class="total">
        Total: <?php echo $total; ?> €
    </div>

    <a class="clear-cart" href="Controlador/clearcart.php">
        Vaciar carrito
    </a>

<?php } ?>

</div>

</body>
</html>