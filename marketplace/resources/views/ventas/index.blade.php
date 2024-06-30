<x-layout>
    <div class="container">
        <h1>Resumen de Ventas</h1>
        <table class="table">
            <thead>
                <tr>
                    <th style="padding-right: 60px;">ID venta</th>
                    <th style="padding-right: 60px;">ID producto</th>
                    <th style="padding-right: 60px;">Fecha de Venta</th>
                    <th style="padding-right: 60px;">Total productos</th>
                    <th style="padding-right: 60px;">Total venta</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ventas as $venta)
                <tr>
                    <td style="padding-right: 60px;">{{ $venta->id }}</td>
                    <td style="padding-right: 60px;">{{ $venta->id_producto }}</td>
                    <td style="padding-right: 60px;">{{ $venta->fecha_venta }}</td>
                    <td style="padding-right: 60px;">{{ $venta->cantidad }}</td>
                    <td style="padding-right: 60px;">{{ $venta->total_venta }}€</td>
                    <td style="text-align: right;"> <!-- Alineación a la derecha sin padding-right -->
                        <div class="d-flex justify-content-end align-items-center">
                        <a href="/ventas/{{ $venta['id'] }}"  class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ver</a> <!-- Cambiado color a btn-info -->
                            <a href="{{ route('ventas.destroy', $venta->id) }}" class="btn btn-sm btn-warning">Borrar</a> 
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>