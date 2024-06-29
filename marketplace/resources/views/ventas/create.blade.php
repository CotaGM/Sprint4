<x-layout>
<div class="container">
    <h1>Crear Venta</h1>
    <form method="post" action="{{ route('ventas.store') }}">
        @csrf

        <div class="form-group">
                <label for="fecha_venta">Fecha de Venta:</label>
                <input type="date" id="fecha_venta" name="fecha_venta" class="form-control" value="{{ old('fecha_venta') }}" required>
            </div>

        @error('fecha_venta')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <div class="form-group">
            <label for="quantities">ID Producto</label>
            <input type="number" name="id_producto" id="id_producto" class="form-control" placeholder="Ej: 1,2,3 (una cantidad por cada producto)">
        </div>

        @error('id_producto')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

        <div class="form-group">
            <label for="quantities">Cantidad</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" placeholder="Ej: 1,2,3 (una cantidad por cada producto)">
        </div>

        @error('cantidad')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <div class="form-group">
            <label for="quantities">Total venta</label>
            <input type="number" name="total_venta" id="total_venta" class="form-control" placeholder="Ej: 1,2,3 (una cantidad por cada producto)">
        </div>

        @error('cantidad')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

<!-- BOTONES DE CREAR Y CANCELAR -->
<div class="mt-6 flex items-center justify-end gap-x-6">
  <a class="text-sm font-semibold leading-6 text-gray-900">Cancelar</button>
  <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">CREAR VENTA</button>
</div>
    </form>
</div>
</x-layout>
