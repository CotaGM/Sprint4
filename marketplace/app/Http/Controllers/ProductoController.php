<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller{

    public function index()
    {
        $equipos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
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
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        Producto::create($data);

        return redirect()->route('equipos.index')->with('success', 'Equipo creado correctamente.');
    }

    public function show(Producto $producto){
        return view('equipos.show', compact('equipo'));
    }

    public function edit(Producto $producto)
    {
        return view('equipos.edit', compact('equipo'));
    }

    public function update(Request $request, Producto $producto)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:100',
            'ciudad' => 'required|string|max:100',
            'fundacion' => 'required|date',
            'estadio' => 'required|string|max:100',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $producto->update($data);
        return redirect()->route('equipo.index')->with('success', 'Equipo actualizado correctamente.');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('equipos.index')->with('success', 'Equipo eliminado correctamente.');
    }
}

?>  