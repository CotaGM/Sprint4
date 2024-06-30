<x-layout>

    <p><strong>Fecha: </strong>{{ $venta->fecha_venta}}</p>
    <p><strong>ID producto: </strong>{{ $venta->id_producto}}</p>
    <p><strong>ID venta: </strong>{{ $venta->id}}</p>
    <p><strong>Cantidad: </strong>{{ $venta->cantidad }}</p>
    <p><strong>Precio: </strong>{{ $venta->total_venta}}</p>

    <div class="mt-6">
    <a href="{{ route('ventas.edit', $venta->id) }}" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Editar</a>

    <!-- Boton de eliminar -->
    <form action="{{ route('ventas.destroy', $venta->id) }}" method="POST" class="inline"> 
    @csrf
    @method('DELETE')
    <button type="submit" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Borrar</button>
    </form>
   

</x-layout>