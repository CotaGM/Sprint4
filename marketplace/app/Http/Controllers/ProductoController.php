<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller{

    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create(){
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titulo' => 'required|string|max:100',
            'precio' => 'required|string|max:100',
            'descripcion' => 'required|string|max:600',
            'artesano' => 'required|string|max:100',
            'localidad' => 'required|string|max:100',
            'pais' => 'required|string|max:100',
            'tipo' => 'required|string|max:100',
            'material' => 'required|string|max:100',
        ]);

        Producto::create($data);

        return redirect()->route('productos.index');
    }

    public function show(Producto $producto){
        return view('productos.show', compact('producto'));
    }

    public function edit(Producto $producto){
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto){
        $data = $request->validate([
            'titulo' => 'required|string|max:100',
            'precio' => 'required|string|max:100',
            'descripcion' => 'required|string|max:600',
            'artesano' => 'required|string|max:100',
            'localidad' => 'required|string|max:100',
            'pais' => 'required|string|max:100',
            'tipo' => 'required|string|max:100',
            'material' => 'required|string|max:100',
        ]);
    
        $producto->update($data);
        return redirect()->route('productos.index');
    }

    public function destroy(Producto $producto){
        $producto->delete();
        return redirect()->route('productos.index');
    }
}

?>  