
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Juguete;
use App\Models\Torta;


Route::get('/', function () {
    return view('layouts.inicio');
});

Route::post('/pedidos', function (Request $request) {

    $request->validate([
        'nombre' => 'required|string|max:100',
        'correo' => 'required|email|max:150',
        'producto' => [
            'required',
            'in:Torta de chocolate,Cheesecake,Cupcake,Brownie,Tarta de fresa,Galletas',
        ],
        'mensaje' => 'nullable|string|max:1000',
    ]);

    return redirect('/')
        ->with('exito', '¡Tu pedido fue recibido correctamente!');
})->name('pedidos.store');

//

Route::get('/juguetes', function () {
    $juguetes = Juguete::all();

    return view('juguetes', compact('juguetes'));
});

Route::get('/juguetes/nuevo', function () {
    return view('nuevo-juguete');
});

Route::post('/juguetes/nuevo', function () {
    request()->validate([
        'nombre' => 'required',
        'precio' => 'required|integer',
    ], [
        'nombre.required' => 'Pone el nombre del juguete.',
        'precio.required' => 'Pone el precio del juguete.',
        'precio.integer' => 'Aca el precio va entero, sin decimales ni letras.',
    ]);

    Juguete::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
    ]);

    return redirect('/juguetes');
});




Route::get('/tortas', function () {
    $tortas = Torta::all();

    return view('tortas', compact('tortas'));
});

Route::get('/tortas/nueva', function () {
    return view('nueva-torta');
});

Route::post('/tortas', function (Request $request) {
    $request->validate([
        'nombre' => 'required|string|max:100',
        'precio' => 'required|integer|min:1',
        'stock' => 'required|integer|min:0',
    ], [
        'nombre.required' => 'Debes ingresar el nombre de la torta.',
        'precio.required' => 'Debes ingresar el precio.',
        'precio.integer' => 'El precio debe ser un número entero.',
        'stock.required' => 'Debes ingresar el stock.',
        'stock.integer' => 'El stock debe ser un número entero.',
        'stock.min' => 'El stock no puede ser negativo.',
    ]);

    Torta::create([
        'nombre' => $request->nombre,
        'precio' => $request->precio,
        'stock' => $request->stock,
    ]);

    return redirect('/tortas')->with('exito', 'Torta agregada correctamente.');
});
