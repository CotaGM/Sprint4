<x-layout>
<div class="text-right" style="padding-top: 20px;">
<a href="{{ route('ventas.create') }}" class="inline-block">
    <button class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"> + Crear Venta</button>
</a>

 </div>
  <div class="container mt-4">
    <div class="table-responsive" style="padding-top: 40px;">
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="padding-right: 130px;">ID venta</th>
                    <th style="padding-right: 130px;">ID producto</th>
                    <th style="padding-right: 130px;">Fecha de Venta</th>
                    <th style="padding-right: 130px;">Total productos</th>
                    <th style="padding-right: 130px;">Total venta</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($ventas as $venta)
                <tr style="background-color: #ffffff; border: 1px solid #dee2e6;">
                
                <td style="padding-right: 60px;">{{ $venta->id }}</td>
                    <td style="padding-right: 60px;">{{ $venta->id_producto }}</td>
                    <td style="padding-right: 60px;">{{ $venta->fecha_venta }}</td>
                    <td style="padding-right: 60px;">{{ $venta->cantidad }}</td>
                    <td style="padding-right: 60px;">{{ $venta->total_venta }}€</td>
                    <td style="text-align: right;"> 
                  <div class="d-flex justify-content-end align-items-center">
                <a href="/ventas/{{ $venta['id'] }}"  class=" hover:bg-indigo-600 inline-flex items-center rounded-md bg-slate-600 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
            <svg class="-ml-0.5 mr-1.5 h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path d="M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z" />
          <path d="M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z" />
        </svg>
        Ver
        </a>

            </div>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
        <div class="mt-4">
            {{ $ventas->links() }}
        </div>
    </div>
</x-layout>