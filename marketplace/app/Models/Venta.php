<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model{
    
    use HasFactory;
  
    protected $table = 'ventas';

    protected $fillable = ['fecha_venta', 'id_producto', 'cantidad', 'total_venta'];

    public function productos(){
        return $this->belongsTo(Producto::class);
    }
}
