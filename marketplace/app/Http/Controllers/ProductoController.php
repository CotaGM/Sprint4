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
    $request->validate([
        'titulo' => 'required|string|max:100',
        'precio' => 'required|string|max:100',
        'descripcion' => 'required|string|max:600',
        'artesano' => 'required|string|max:100',
        'localidad' => 'required|string|max:100',
        'pais' => 'required|string|max:100',
        'tipo' => 'required|string|max:100',
        'material' => 'required|string|max:100',
        'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validación para imagen
    ]);

    // Obtener el archivo de imagen
    $imagen = $request->file('imagen');

    // Generar un nombre único para la imagen basado en el tiempo actual
    $nombreImagen = time() . '_' . $imagen->getClientOriginalName();

    // Mover la imagen a la carpeta public/uploads/imagenes
    $imagen->move(public_path('/imagenes'), $nombreImagen);

    // Guardar los datos del producto en la base de datos
    Producto::create([
        'titulo' => $request->titulo,
        'precio' => $request->precio,
        'descripcion' => $request->descripcion,
        'artesano' => $request->artesano,
        'localidad' => $request->localidad,
        'pais' => $request->pais,
        'tipo' => $request->tipo,
        'material' => $request->material,
        'imagen' => '/imagenes/' . $nombreImagen, // Guardar la ruta de la imagen en la base de datos
    ]);

    return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
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
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
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