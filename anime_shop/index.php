<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>OtakuShop</title>
</head>
<body>
    <div class="container">
    <h1>OtakuShop</h1>
    <p>Ropa de tus animes favoritos en esta tienda!</p>
    </div>
<hr>


<div class="container2">

    <!-- FILTROS (LADO IZQUIERDO) -->
    <aside class="filters">
        <h3>Filtros</h3>

        <label>Precio</label>
        <input type="number" placeholder="Min">

        <input type="number" placeholder="Max">

        <button>Aplicar</button>
    </aside>

    <!-- PRODUCTOS (LADO DERECHO) -->
    <main class="products">

       <?php
        require_once("Vista/showproducts.php");
        ?>

    </main>

</div>






</body>
</html>