<x-layout>
    <div class="space-y-4">
        <img src="{{ asset($producto->imagen) }}" width="500">
        <p><strong>{{ $producto->titulo }}</strong></p>
        <p><strong>Precio: </strong>{{ $producto->precio }}€</p>
        <p><strong>Descripción: </strong>{{ $producto->descripcion }}</p>
        <p><strong>Artesano: </strong>{{ $producto->artesano }}</p>
        <p><strong>Localidad: </strong>{{ $producto->localidad }}</p>
        <p><strong>País: </strong>{{ $producto->pais }}</p>
        <p><strong>Tipo: </strong>{{ $producto->tipo }}</p>
        <p><strong>Material: </strong>{{ $producto->material }}</p>

        <div class="mt-6">
            <a href="{{ route('productos.edit', $producto->id) }}" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Editar</a>

            <!-- Boton de eliminar -->
            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Borrar</button>
            </form>
        </div>
    </div>
</x-layout>
