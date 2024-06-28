<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index(){
        $ventas = Producto::paginate(6);
        return view('ventas.index', compact('ventas'));
    }

    // CREATE
    public function create(){
        return view('ventas.create');
    }

    
}