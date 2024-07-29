<x-layout>
    <div class="container">
        <div class="row">
            <!-- Formulario de edición de venta -->
            <div class="col-8">
                <form method="post" action="{{ route('ventas.update', $venta->id) }}">
                    @csrf
                    @method('PUT') <!-- Indica que es una actualización -->
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Editar Venta</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600">Modifique los detalles de la venta.</p>

                            <!-- Ajuste del espaciado superior de los campos -->
                            <div class="mt-6">
                                <!-- FECHA -->
                                <div class="sm:col-span-3 mb-4">
                                    <label for="fecha_venta" class="block text-sm font-medium leading-6 text-gray-900 mb-1">Fecha Venta</label>
                                    <div class="mt-1">
                                        <input type="date" id="fecha_venta" name="fecha_venta" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" value="{{ old('fecha_venta', $venta->fecha_venta) }}" required>
                                    </div>
                                    @error('fecha_venta')
                                        <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- PRODUCTOS -->
                                @foreach($venta->productos as $index => $producto)
                                <div class="product-item mb-4">
                                    <div class="sm:col-span-3 mb-4">
                                        <label for="productos[{{ $index }}][id]" class="block text-sm font-medium leading-6 text-gray-900 mb-1">Producto</label>
                                        <div class="mt-1">
                                            <select name="productos[{{ $index }}][id]" id="productos[{{ $index }}][id]" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" required>
                                                <option value="">Seleccione un producto</option>
                                                @foreach($productos as $prod)
                                                <option value="{{ $prod->id }}" {{ $prod->id == $producto->id ? 'selected' : '' }}>{{ $prod->id }} - {{ $prod->titulo }} - {{ $prod->precio }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- CANTIDAD -->
                                    <div class="sm:col-span-3 mb-4">
                                        <label for="productos[{{ $index }}][cantidad]" class="block text-sm font-medium leading-6 text-gray-900 mb-1">Cantidad</label>
                                        <div class="mt-1">
                                            <input type="number" name="productos[{{ $index }}][cantidad]" id="productos[{{ $index }}][cantidad]" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" value="{{ old('productos[' . $index . '][cantidad]', optional($producto->pivot)->cantidad) }}" placeholder="Cantidad" required>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- BOTONES DE ACTUALIZAR Y CANCELAR -->
                    <div class="mt-6">
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Actualizar</button>
                        <a href="{{ route('ventas.index') }}" class="rounded-md bg-white px-3 py-2 text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
