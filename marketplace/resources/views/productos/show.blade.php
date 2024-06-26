<x-layout>

<img src="{{ $producto->imagen }}" alt="{{ $producto->titulo }}" width="500">
    <p><strong>{{ $producto->titulo }}</strong></p>
    <p><strong>Precio: </strong>{{ $producto->precio }}€</p>
    <p><strong>Descripcion: </strong>{{ $producto->descripcion}}</p>
    <p><strong>Artesano: </strong>{{ $producto->artesano }}</p>
    <p><strong>Localidad: </strong>{{ $producto->localidad }}</p>
    <p><strong>Pais: </strong>{{ $producto->pais}}</p>
    <p><strong>Tipo: </strong>{{ $producto->tipo }}</p>
    <p><strong>Material: </strong>{{ $producto->material}}</p>

    <p class="mt-6">
    <a href="{{ route('productos.edit', $producto->id) }}" class="text-white font-medium text-sm px-5 py-3 bg-rose-300 hover:bg-rose-500 focus:ring-3 focus:outline-none rounded-lg ">Editar</a>
    </p>

</x-layout>