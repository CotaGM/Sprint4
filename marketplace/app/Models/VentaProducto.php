<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VentaProducto extends Model
{
    protected $fillable = ['id_producto', 'cantidad', 'total_venta'];

    public function venta()
    {
        return $this->belongsTo(Venta::class);
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }
}
