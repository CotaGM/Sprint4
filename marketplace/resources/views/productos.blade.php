<x-layout>
    <x-slot:heading>
        Productos
    </x-slot:heading>
    <h1>Aca van los productos por categoría</h1> 
    
        @foreach ($productos as $producto)
          <li><strong>{{ $producto['titulo']}}:</strong> Precio por unidad {{$producto['precio']}}</li>
        @endforeach
    
</x-layout>