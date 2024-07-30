<x-layout>
    <div class="flex flex-col items-center mt-10 space-y-6">
        <div class="relative bg-white p-4 shadow-md rounded-md w-full max-w-3xl">
            <div class="flex space-x-4" style="padding-top: 20px;">
                <img src="{{ asset($producto->imagen) }}" width="400" class="flex-shrink-0">
                <div class="space-y-4 flex-1">
                    
                    <!-- Título -->
                    <div>
                        <p class="text-sm font-semibold text-black sm:text-base dark:text-white">{{ $producto->titulo }}</p>
                    </div>
                    
                    <!-- Descripción -->
                    <div>
                        <h3 class="sr-only">Descripción</h3>
                        <div class="space-y-6">
                            <p style="font-size: 13px; line-height: 1.5; color: #4B5563;">{{ $producto->descripcion }}</p>
                        </div>
                    </div>
                    
                    <!-- Detalle -->
                    <div class="mt-10">
                        <div class="mt-4 space-y-2 text-sm">
                            <p class="text-gray-600"><strong style="color: black;">Precio: </strong>{{ $producto->precio }}€</p>
                            <p class="text-gray-600"><strong style="color: black;">Artesano: </strong>{{ $producto->artesano }}</p>
                            <p class="text-gray-600"><strong style="color: black;">Localidad: </strong>{{ $producto->localidad }}</p>
                            <p class="text-gray-600"><strong style="color: black;">País: </strong>{{ $producto->pais }}</p>
                            <p class="text-gray-600"><strong style="color: black;">Tipo: </strong>{{ $producto->tipo }}</p>
                            <p class="text-gray-600"><strong style="color: black;">Material: </strong>{{ $producto->material }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Botones de acción en la parte inferior derecha -->
            <div class="absolute bottom-4 right-4 flex space-x-4">
                <!-- Botón de eliminar -->
                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="rounded-md bg-white px-4 py-2 text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Borrar</button>
                </form>

                <a href="{{ route('productos.edit', $producto->id) }}" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Editar</a>
            </div>
        </div>
    </div>
</x-layout>
