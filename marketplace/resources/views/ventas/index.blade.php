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
                    <td style="text-align: right;"> 
                        <div class="d-flex justify-content-end align-items-center">
                        <a href="/ventas/{{ $venta['id'] }}"  class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ver</a> <!-- Cambiado color a btn-info -->
            
            <!-- Boton de eliminar -->
            <form action="{{ route('ventas.destroy', $venta->id) }}" method="POST" class="inline"> 
            @csrf
            @method('DELETE')
            <button type="submit" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Borrar</button>
            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>