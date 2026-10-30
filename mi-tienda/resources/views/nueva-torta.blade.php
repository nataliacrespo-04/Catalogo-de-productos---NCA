<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva torta</title>
</head>
<body>

    <h1>Agregar una torta</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <form action="/tortas" method="POST">
        @csrf

        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}">
        <br><br>

        <label>Precio:</label>
        <input type="number" name="precio" value="{{ old('precio') }}">
        <br><br>

        <label>Stock:</label>
        <input type="number" name="stock" value="{{ old('stock') }}">
        <br><br>

        <button type="submit">Guardar torta</button>
    </form>

    <br>
    <a href="/tortas">Ver tortas</a>

</body>
</html>