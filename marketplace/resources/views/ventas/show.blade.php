<x-layout>

    
    <p><strong>Fecha: </strong>{{ $venta->fecha_venta}}</p>
    <p><strong>ID producto: </strong>{{ $venta->id_producto}}</p>
    <p><strong>ID venta: </strong>{{ $venta->id}}</p>
    <p><strong>Cantidad: </strong>{{ $venta->cantidad }}</p>
    <p><strong>Precio: </strong>{{ $venta->total_venta}}</p>
   
<!-- BOTON DE EDITAR-->
    <p class="mt-6">
    <a href="{{ route('ventas.edit', $venta->id) }}" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Editar</a>
    <a href="{{ route('ventas.destroy', $venta->id) }}" class="btn btn-sm btn-warning">Borrar</a>
    </p>
   

</x-layout>