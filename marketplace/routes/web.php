<?php

use Illuminate\Support\Facades\Route;
use App\Models\Productos;

Route::get('/', function () {
    return view('home', [
        "productos" => Productos::all() 
     ]);
});

Route::get('/productos', function () {
    return view('productos', [
       "productos" => Productos::all() 
    ]);
});

Route::get('/productos/{id}', function ($id) {
    $producto = Productos::find($id);
    return view("producto", ["producto" => $producto]);
});

Route::get('/nosotros', function () {
    return view('nosotros');
});
