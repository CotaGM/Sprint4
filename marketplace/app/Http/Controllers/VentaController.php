<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Producto;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::with('productos')->get();
        return view('ventas.index', compact('ventas'));
    }

    public function create()
    {
        $productos = Producto::all();
        return view('ventas.create', compact('productos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha_venta' => 'required|date',
            'id_producto' => 'required|integer',
            'cantidad' => 'required|integer',
            'total_venta' => 'required|numeric|decimal:10,2',

        ]);

        $venta = Venta::create([
            'fecha_venta' => $request->fecha_venta,
            'id_producto' => $request->id_producto,
            'cantidad' => $request->cantidad,
            'total_venta' => $request->total_venta,
        ]);


        return redirect()->route('ventas.index');
    }
}
