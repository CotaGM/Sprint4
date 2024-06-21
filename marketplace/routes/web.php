<?php

use Illuminate\Support\Facades\Route;
use App\Models\Producto;

Route::get('/', function () {
    return view('home');
});

Route::get('/productos', function () {
    return view('productos', [
        'productos' => Producto::simplePaginate(6)
    ]);
});

Route::get('/productos/{id}', function ($id) {
    $producto = Producto::find($id);
    return view('producto', ['producto' => $producto]);
});

Route::get('/nosotros', function () {
    return view('nosotros');
});
