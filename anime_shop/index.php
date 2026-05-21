<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>OtakuShop</title>
</head>
<body>

<div class="global">
    <div class="container">
    <h1>OtakuShop</h1>
    <p>Remeras, buzos y más!</p>
    <nav>
        <a href="shoppingcart.php">
            <i class="fa-solid fa-cart-shopping"></i>
        </a>
    </nav>
    </div>
<hr>


<div class="container2">

   
    <aside class="filters">
        <?php
        require_once("Vista/filters.php")
        ?>
    </aside>

   
    <main class="products">

       <?php
        require_once("Vista/showproducts.php");
        //require_once("Vista/addproducts.php");
        ?>

    </main>

</div>

</div>




</body>
</html>