<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Producto;
use Illuminate\Http\Request;

class VentaController extends Controller{
    
    public function index(){
        $ventas = Venta::paginate(10);
        return view('ventas.index', compact('ventas'));
    }

    // CREATE
    public function create()
    {
        $productos = Producto::all(); // Obtener todos los productos para mostrar en el formulario
        return view('ventas.create', compact('productos'));
    }

    public function store(Request $request)
{
    $request->validate([
        'fecha_venta' => 'required|date',
        'productos' => 'required|array',
        'productos.*.id' => 'required|integer|exists:productos,id',
        'productos.*.cantidad' => 'required|integer',
    ]);

    $totalVenta = 0;
    foreach ($request->productos as $producto) {
        $productoDB = Producto::find($producto['id']);
        $totalVenta += $producto['cantidad'] * $productoDB->precio;
    }

    $venta = Venta::create([
        'fecha_venta' => $request->fecha_venta,
        'total_venta' => $totalVenta,
    ]);

    foreach ($request->productos as $producto) {
        $venta->productos()->attach($producto['id'], [
            'cantidad' => $producto['cantidad'],
            'precio' => $productoDB->precio,
            'producto_id' => $producto['id'] // Asegúrate de guardar el 'producto_id' en la tabla pivote
        ]);
    }

    return redirect()->route('ventas.index');
}

    // READ
    public function show(Venta $venta) {
        return view('ventas.show', compact('venta'));
    }

    public function edit(Venta $venta){
        return view('ventas.edit', compact('venta'));
    }

    // Método update
    public function update(Request $request, Venta $venta){
        $data = $request->validate([
            'fecha_venta' => 'required|date',
            'id_producto' => 'required|integer',
            'cantidad' => 'required|integer',
            'total_venta' => 'required|numeric',
        ]);

        $venta->update($data);

        return redirect()->route('ventas.index');
    }
    
    // DELETE
    public function destroy(Venta $venta){

        $venta->delete();
        return redirect()->route('ventas.index');
    }
}

