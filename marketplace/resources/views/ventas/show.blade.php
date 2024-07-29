<x-layout>
    <div class="flex flex-col items-center mt-10 space-y-6">
        <div class="bg-white p-4 shadow-md rounded-md w-full max-w-3xl">
            @foreach($venta->productos as $producto)
                <div class="flex items-center space-x-6">
                    <!-- Imagen del Producto a la Derecha -->
                    <img src="{{ asset($producto->imagen) }}"  class="w-48 h-48 object-cover flex-shrink-0">
                    
                    <!-- Contenedor de Información a la Izquierda -->
                    <div class="flex-1 space-y-2 text-sm">
                        <p class="text-gray-600"><strong style="color: black;">Fecha: </strong>{{ $venta->fecha_venta }}</p>
                        <p class="text-gray-600"><strong style="color: black;">ID Producto: </strong>{{ $producto->id }}</p>
                        <p class="text-gray-600"><strong style="color: black;">ID Venta: </strong>{{ $venta->id }}</p>
                        <p class="text-gray-600"><strong style="color: black;">Cantidad: </strong>{{ $producto->pivot->cantidad }}</p>
                        <p class="text-gray-600"><strong style="color: black;">Total: </strong>{{ $venta->total_venta }}€</p>
                    </div>
                </div>
            @endforeach

             <!-- Botones de acción -->
             <div class="flex justify-end mt-6 space-x-4">
                <a href="{{ route('ventas.edit', $venta->id) }}" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Editar</a>

                <!-- Botón de eliminar -->
                <form action="{{ route('ventas.destroy', $venta->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="rounded-md bg-white px-3 py-2 text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Borrar</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>

