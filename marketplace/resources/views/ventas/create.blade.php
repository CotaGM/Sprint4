<x-layout>
<div class="container">
    <h1>Crear Venta</h1>
    <form action="{{ route('ventas.store') }}" method="POST">
        @csrf

        <div class="mb-3">
                <label for="fecha_venta" class="form-label">Fecha de Venta</label>
                <input type="date" class="form-control" id="fecha_venta" name="fecha_venta" value="{{ old('fecha_venta') }}" required>
            </div>

        @error('fecha_venta')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <div class="form-group">
            <label for="quantities">ID Producto</label>
            <input type="id_producto" name="id_producto" id="cantidades" class="form-control" placeholder="Ej: 1,2,3 (una cantidad por cada producto)">
        </div>

        @error('id_producto')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

        <div class="form-group">
            <label for="quantities">Cantidad</label>
            <input type="cantidad" name="cantidad" id="cantidad" class="form-control" placeholder="Ej: 1,2,3 (una cantidad por cada producto)">
        </div>

        @error('cantidad')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <div class="form-group">
            <label for="quantities">Total venta</label>
            <input type="total_venta" name="total_venta" id="total_venta" class="form-control" placeholder="Ej: 1,2,3 (una cantidad por cada producto)">
        </div>

        @error('cantidad')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

        <button type="submit" class="btn btn-primary">Crear Venta</button>
    </form>
</div>
</x-layout>
