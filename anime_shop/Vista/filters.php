<form method="GET">

    <h3>Filtros</h3>

    <label>Precio</label> <br>

    <input type="number" name="min" placeholder="Min">
    <input type="number" name="max" placeholder="Max">

    <br><br>

    <label>Categorias</label> <br>

    Remeras
    <input type="checkbox" name="cat[]" value="remeras"> <br>

    Hoodies
    <input type="checkbox" name="cat[]" value="hoodies"> <br>

    Pantalones y shorts
    <input type="checkbox" name="cat[]" value="pantalones"> <br>

    <br>

    <button type="submit">Aplicar</button>

</form>