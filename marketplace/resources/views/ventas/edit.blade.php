<x-layout>
    <div class="container">
        <h1>Editar Venta</h1>
        <form method="POST" action="{{ route('ventas.update', $venta->id) }}">
            @csrf
            @method('PUT')

            <!-- Fecha -->
            <div class="form-group">
                <label for="fecha_venta">Fecha de Venta:</label>
                <input type="date" id="fecha_venta" name="fecha_venta" class="form-control" value="{{ $venta->fecha_venta }}" required>
            </div>
            @error('fecha_venta')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <!-- ID PRODUCTO -->
            <div class="form-group">
                <label for="id_producto">ID Producto:</label>
                <input type="number" id="id_producto" name="id_producto" class="form-control" value="{{ $venta->id_producto }}" required>
            </div>
            @error('id_producto')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <!-- CANTIDAD -->
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" class="form-control" value="{{ $venta->cantidad }}" required>
            </div>
            @error('cantidad')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <!-- TOTAL VENTA -->
            <div class="form-group">
                <label for="total_venta">Total Venta:</label>
                <input type="number" id="total_venta" name="total_venta" class="form-control" value="{{ $venta->total_venta }}" required>
            </div>
            @error('total_venta')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <!-- BOTONES -->
            <div class="flex justify-end mt-6">
                <a href="{{ route('ventas.show', $venta->id) }}" class="text-sm font-semibold leading-6 text-gray-900 mr-4">Cancelar</a>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar cambios</button>
            </div>

            <!-- BOTÓN DELETE -->
            <form method="POST" action="{{ route('ventas.destroy', $venta->id) }}" class="mt-6">
                @csrf
                @method('DELETE')
                <button type="submit" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Eliminar</button>
            </form>
        </form>
    </div>
</x-layout>
