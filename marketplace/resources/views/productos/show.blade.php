<x-layout>

<img src="{{ asset($producto->imagen) }}" width="500">
    <p><strong>{{ $producto->titulo }}</strong></p>
    <p><strong>Precio: </strong>{{ $producto->precio }}€</p>
    <p><strong>Descripcion: </strong>{{ $producto->descripcion}}</p>
    <p><strong>Artesano: </strong>{{ $producto->artesano }}</p>
    <p><strong>Localidad: </strong>{{ $producto->localidad }}</p>
    <p><strong>Pais: </strong>{{ $producto->pais}}</p>
    <p><strong>Tipo: </strong>{{ $producto->tipo }}</p>
    <p><strong>Material: </strong>{{ $producto->material}}</p>

    <p class="mt-6">
    <a href="{{ route('productos.edit', $producto->id) }}" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Editar</a>
    </p>

</x-layout>