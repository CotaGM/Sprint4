<x-layout>
<div class="container">
    <h1>Crear Venta</h1>
    <form action="{{ route('ventas.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="fecha_venta">Fecha de Venta</label>
            <input type="date" name="fecha_venta" id="fecha_venta" class="form-control">
        </div>

        <div class="form-group">
            <label for="productos">Productos</label>
            <select name="productos[]" id="productos" class="form-control" multiple>
                @foreach($productos as $producto)
                <option value="{{ $producto->id }}">{{ $producto->titulo }} ${{ $producto->precio }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="quantities">Cantidades</label>
            <input type="text" name="cantidades" id="cantidades" class="form-control" placeholder="Ej: 1,2,3 (una cantidad por cada producto)">
        </div>

        <button type="submit" class="btn btn-primary">Crear Venta</button>
    </form>
</div>
</x-layout>
