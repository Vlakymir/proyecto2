<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articulo formulario</title>
</head>
<body>
    <h1>Crear Articulo</h1>
    <form action="/articulo" method="post">
        @csrf
        <label for=" ID">ID</label>
        <input type="id" name = "ID ">
        <br>
        <label for="codigo ">Codigo</label>
        <input type="number" name = "odigo ">
        <br>
        <label for="nombre ">Nombre</label>
        <input type="text" name = "nombre ">
        <br>
        <label for="precio_venta ">Precio venta</label>
        <input type="number" name = "precio_venta ">
        <br>
        <label for="stock ">Stock</label>
        <input type="number" name = "stock ">
        <br>   
        <label for="descripcion ">Descripcion</label>
        <input type="text" name = "descripcion ">
        <input type="submit" value="Guardar">
        <br>                
    </form>
</body>
</html>