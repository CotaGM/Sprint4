<!-- resources/views/ventas/index.blade.php -->
<x-layout>
<div class="container">
    <h1>Resumen de Ventas</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha de Venta</th>
                <th>Total</th>
                <th>Productos</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
                <tr>
                    <td>{{ $venta->id }}</td>
                    <td>{{ $venta->fecha_venta }}</td>
                    <td>{{ $venta->cantidad}}</td>
                    <td>{{ $venta->total_venta }}€</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-layout>
