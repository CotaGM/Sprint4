<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model {
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = ['titulo', 'precio', 'descripcion', 'artesano', 'localidad', 'pais', 'tipo', 'material', 'imagen'];

    public function ventas(){
        return $this->belongsToMany(Venta::class)->withPivot('cantidad', 'precio')->withTimestamps();
    }
}