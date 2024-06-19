<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Productos{
    public static function all(): array{
    
        return[
           [
             "id" => 1,
             "titulo" => "Producto 1",
             "precio" => "€",
           ],
           [
             "id" => 2,
             "titulo" => "Producto 2",
             "precio" => "€",
           ],
           [
            "id" => 3,
            "titulo" => "Producto 3",
            "precio" => "€",
          ]
        ];
    }

    public static function find(int $id): array{

        $producto = Arr::first(static::all(), fn($producto) => $producto['id'] == $id);

        if(!$producto){
             abort(404);
        }

        return $producto;
    }
}