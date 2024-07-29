<x-layout>
    <div class="container">
        <div class="row">
            <!-- Formulario de registro de venta -->
            <div class="col-8">
                <form method="post" action="{{ route('ventas.store') }}">
                    @csrf
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Registrar Venta</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600">Ingrese los detalles de la venta.</p>

                            <!-- Ajuste del espaciado superior de los campos -->
                            <div class="mt-6">
                                <!-- FECHA -->
                                <div class="sm:col-span-3 mb-4">
                                    <label for="fecha_venta" class="block text-sm font-medium leading-6 text-gray-900 mb-1">Fecha Venta</label>
                                    <div class="mt-1">
                                        <input type="date" id="fecha_venta" name="fecha_venta" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" value="{{ old('fecha_venta') }}" required>
                                    </div>
                                    @error('fecha_venta')
                                        <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- PRODUCTOS -->
                                <div class="product-item mb-4">
                                    <div class="sm:col-span-3 mb-4">
                                        <label for="productos[0][id]" class="block text-sm font-medium leading-6 text-gray-900 mb-1">Producto</label>
                                        <div class="mt-1">
                                            <select name="productos[0][id]" id="productos[0][id]" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" required>
                                                <option value="">Seleccione un producto</option>
                                                @foreach($productos as $producto)
                                                <option value="{{ $producto->id }}" data-imagen="{{ asset('storage/' . $producto->imagen) }}">{{ $producto->id }} - {{ $producto->titulo }} - {{ $producto->precio}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- CANTIDAD -->
                                    <div class="sm:col-span-3 mb-4">
                                        <label for="productos[0][cantidad]" class="block text-sm font-medium leading-6 text-gray-900 mb-1">Cantidad</label>
                                        <div class="mt-1">
                                            <input type="number" name="productos[0][cantidad]" id="productos[0][cantidad]" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" placeholder="Cantidad" required>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Añadir a Venta</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
