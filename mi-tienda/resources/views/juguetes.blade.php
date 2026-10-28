
@extends('layouts.base')

@section('content')
    <h1>Jugueteria El Trompo</h1>

    <p>Bienvenidos a Jugueteria El Trompo, donde encontrarás juguetes para compartir, aprender y divertirte.</p>

    <p>Hay {{ count($juguetes) }} juguetes en el estante.</p>

    @foreach ($juguetes as $juguete)
        <div>
            <h3>{{ $juguete->nombre }}</h3>
            <p>Precio: Bs. {{ $juguete->precio }}</p>
        </div>
    @endforeach

    <p>Estante atendido por Natalia Crespo Ayala</p>

    <a href="/juguetes/nuevo">Registrar un juguete</a>
@endsection
