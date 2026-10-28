
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Juguete;


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

    // Por ahora validamos el pedido, pero no lo guardamos en la base de datos.
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

