
<x-layout>
<div class="container">
    <h1>Resumen de Ventas</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha de Venta</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ventas as $venta)
                <tr>
                    <td>{{ $venta->id }}</td>
                    <td>{{ $venta->fecha_venta }}</td>
                    <td>{{ $venta->total_venta }}€</td>
                    <td>
                        <a href="{{ route('ventas.show', $venta->id) }}" class="btn btn-info">Ver Detalles</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $ventas->links() }}
    </div>
</div>
</x-layout>
