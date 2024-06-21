<x-layout>
    <x-slot:heading>
        Producto
    </x-slot:heading>
    <h1>Aca va el detalle del producto</h1> 
      
    <h2 class = "font-bold text-lg">{{$producto ['titulo'] }}</h2>

    <p>
       Este producto tiene un precio por unidad de  {{$producto ['precio'] }}
    </p>
</x-layout>