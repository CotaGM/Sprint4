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

</x-layout>