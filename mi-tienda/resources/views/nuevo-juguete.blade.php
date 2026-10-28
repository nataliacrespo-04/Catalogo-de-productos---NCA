
@extends('layouts.base')

@section('content')
    <h1>Registrar juguete</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/juguetes/nuevo" method="POST">
        @csrf

        <div>
            <label for="nombre">Nombre del juguete:</label>
            <input type="text" id="nombre" 
            name="nombre" value="{{ old('nombre') }}" require>
        </div>

        <div>
            <label for="precio">Precio en Bs:</label>
            <input type="number" id="precio"
             name="precio" value="{{ old('precio') }}" require  >
        </div>

        <button type="submit">Registrar juguete</button>
    </form>

    <p><a href="/juguetes">Volver al listado</a></p>
@endsection
