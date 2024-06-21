<?php

use Illuminate\Support\Facades\Route;
use App\Models\Producto;

Route::get('/', function () {
    return view('home');
});

Route::get('/productos', function () {
    return view('productos.index', [
        'productos' => Producto::simplePaginate(6)
    ]);
});

Route::get('/productos/create', function () {
    return view('productos.create');
});

Route::get('/productos/{id}', function ($id) {
    $producto = Producto::find($id);
    return view('productos.read', ['producto' => $producto]);
});

Route::get('/nosotros', function () {
    return view('nosotros');
});



/*
  App\Models\Producto::create(['titulo' => 'Tabla de cocina de Mañio', 'precio' => '15€', 'descripcion' => 'Pieza tallada a mano a partir de un tronco de madera nativa, que los mamüllfe (tallador mapuche) obtienen de árboles caídos.', 'artesano' => 'Moises Cuminao Antihuala', 'localidad' => 'Panguipulli, Chile', 'tipo' => 'Hogar', 'material' => 'Madera']);
  $table->id();
            $table->string('titulo');
            $table->string('precio');
            $table->string('descripcion');
            $table->string('artesano');
            $table->string('localidad');
            $table->string('tipo');
            $table->string('material');
            $table->timestamps();*/