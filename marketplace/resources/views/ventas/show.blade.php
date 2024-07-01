<x-layout>
    <div class="flex space-x-4" style="padding-top: 20px;">
        <img src="{{ asset($venta->producto->imagen) }}" width="600" class="flex-shrink-0">
        <div class="space-y-4">
            
            <!-- Título -->
            <div>
                <p class="text-sm font-semibold text-black sm:text-base dark:text-white">{{ $venta->producto->titulo }}</p>
            </div>
            
            <!-- Detalle -->
            <div class="mt-10">
                <div class="mt-4 space-y-2 text-sm">
                    <p class="text-gray-600"><strong style="color: black;">Fecha: </strong>{{ $venta->fecha_venta }}</p>
                    <p class="text-gray-600"><strong style="color: black;">ID Producto: </strong>{{ $venta->id_producto }}</p>
                    <p class="text-gray-600"><strong style="color: black;">ID Venta: </strong>{{ $venta->id }}</p>
                    <p class="text-gray-600"><strong style="color: black;">Cantidad: </strong>{{ $venta->cantidad }}</p>
                    <p class="text-gray-600"><strong style="color: black;">Total: </strong>{{ $venta->total_venta }}</p>
                </div>
            </div>
            
            <!-- Botones de acción -->
            <div class="mt-6">
                <a href="{{ route('productos.edit', $venta->id_producto) }}" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Editar</a>

                <!-- Botón de eliminar -->
                <form action="{{ route('productos.destroy', $venta->id_producto) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="rounded-md bg-white px-3 py-2 text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Borrar</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
