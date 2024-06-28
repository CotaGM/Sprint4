<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $fillable = ['id_producto', 'fecha_venta', 'total_venta', 'cantidad'];

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}
