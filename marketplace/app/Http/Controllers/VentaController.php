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
    public function create(){

        $productos = Producto::all(); // Obtener todos los productos para mostrar en el formulario
        return view('ventas.create', compact('productos'));
    }
    
    //STORE
    public function store(Request $request){

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
            'producto_id' => $producto['id'] 
        ]);
    }

    return redirect()->route('ventas.index');
    }

    // READ
    public function show(Venta $venta) {
        return view('ventas.show', compact('venta'));
    }

    public function edit($id) {
       $venta = Venta::with('productos')->findOrFail($id);
       $productos = Producto::all(); 
        
       return view('ventas.edit', compact('venta', 'productos'));
    }


    // UPDATE
    public function update(Request $request, $id){
    // Validación de datos de entrada
    $request->validate([
        'fecha_venta' => 'required|date',
        'productos' => 'required|array',
        'productos.*.id' => 'required|integer|exists:productos,id',
        'productos.*.cantidad' => 'required|integer',
    ]);

    // Buscar la venta
    $venta = Venta::findOrFail($id);

    // Calcular el total de la venta
    $totalVenta = 0;
    foreach ($request->productos as $producto) {
        $productoDB = Producto::find($producto['id']);
        $totalVenta += $producto['cantidad'] * $productoDB->precio;
    }

    // Actualizar la venta
    $venta->update([
        'fecha_venta' => $request->fecha_venta,
        'total_venta' => $totalVenta,
    ]);

    // Actualizar productos asociados
    $venta->productos()->detach(); 
    foreach ($request->productos as $producto) {
        $productoDB = Producto::find($producto['id']);
        $venta->productos()->attach($producto['id'], [
            'cantidad' => $producto['cantidad'],
            'precio' => $productoDB->precio
        ]);
    }

    return redirect()->route('ventas.index');
    }
    
    // DELETE
    public function destroy(Venta $venta){

        $venta->delete();
        return redirect()->route('ventas.index');
    }
}

