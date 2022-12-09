<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de articulos</title>
</head>
<body>
    <h1>
        <table border='1'>
            <tr>
                <th>ID</th>
                <th>codigo</th>
                <th>nombre</th>
                <th>precio_venta</th>
                <th>stock</th>
                <th>descripcion</th>
            </tr>
        </table>
        @foreach ($articulo as $articulo)
            <t>
                <td{{$articulo->id}}></td>
                <td{{$articulo->codigo}}></td>
                <td{{$articulo->nombre}}></td>
                <td{{$articulo->precio_venta}}></td>
                <td{{$articulo->stock}}></td>
                <td{{$articulo->descripcion}}></td>
            </tr>
        @endforeach


    </table>

    </h1>
</body>
</html>