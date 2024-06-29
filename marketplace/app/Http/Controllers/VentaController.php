<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller{
    
    public function index(){
        $ventas = Venta::paginate(15);
        return view('ventas.index', compact('ventas'));
    }

    //CREATE
    public function create(){
        return view('ventas.create');
    }

    // Guardar la data 
    public function store(Request $request){
        $request->validate([
            'fecha_venta' => 'required|date',
            'id_producto' => 'required|integer',
            'cantidad' => 'required|integer',
            'total_venta' => 'required|numeric',
        ]);

        Venta::create([
            'fecha_venta' => $request->fecha_venta,
            'id_producto' => $request->id_producto,
            'cantidad' => $request->cantidad,
            'total_venta' => $request->total_venta,
        ]);

        return redirect()->route('ventas.index');
    }
    // READ
    public function show(Venta $venta) {
        return view('ventas.show', compact('venta'));
    }


    public function edit(Venta $venta){
        return view('ventas.edit', compact('venta'));
    }

    // UPDATE
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

