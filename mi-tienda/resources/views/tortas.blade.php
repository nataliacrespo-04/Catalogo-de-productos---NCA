<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de tortas</title>
</head>
<body>

    <h1>Lista de tortas</h1>

    @if (session('exito'))
        <p>{{ session('exito') }}</p>
    @endif

    <a href="/tortas/nueva">Agregar torta</a>

    <br><br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
        </tr>

        @foreach ($tortas as $torta)
            <tr>
                <td>{{ $torta->id }}</td>
                <td>{{ $torta->nombre }}</td>
                <td>Bs. {{ $torta->precio }}</td>
                <td>{{ $torta->stock }}</td>
            </tr>
        @endforeach
    </table>

</body>
</html>