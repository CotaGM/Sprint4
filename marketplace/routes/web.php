<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::view('/', 'index' )->name('home');

    Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
    Route::get('/create', [ProductoController::class, 'create'])->name('productos.create');
    Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
    
    
    Route::get('/productos/{id}', [ProductoController::class, 'show'])->name('productos.show');
    Route::get('/productos/{id}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
    Route::put('/productos/{id}', [ProductoController::class, 'update'])->name('productos.update');
    Route::delete('/productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');




Route::get('/', function () {
    return view('home');
});

Route::get('/productos', function () {
    return view('productos.index');
});

Route::get('/productos/{id}', function ($id) {
    $producto = Producto::find($id);
    return view('productos.show', ['producto' => $producto]);
});


Route::get('/ventas', function () {
    return view('ventas');
});