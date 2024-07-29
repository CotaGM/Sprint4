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
        $productos = Producto::all(); 
        return view('ventas.create', compact('productos'));
    }

    // Guardar la data 
    public function store(Request $request){
        
        $request->validate([
            'fecha_venta' => 'required|date',
            'productos' => 'required|array',
            'productos.*.id' => 'required|integer|exists:productos,id',
            'productos.*.cantidad' => 'required|integer',
           
        ]);

        // Calcular el total de la venta
        $totalVenta = 0;
        foreach ($request->productos as $producto) {
        $productoDB = Producto::find($producto['id']);
        $totalVenta += $producto['cantidad'] * $productoDB->precio;
    }
        // Crear la nueva venta
        $venta = Venta::create([
            'fecha_venta' => $request->fecha_venta,
            'total_venta' => $totalVenta,
            
        ]);

        // Asociar productos a la venta
        foreach ($request->productos as $producto) {
            $venta->productos()->attach($producto['id'], [
            'cantidad' => $producto['cantidad'], 
            'precio' => Producto::find($producto['id'])->precio
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