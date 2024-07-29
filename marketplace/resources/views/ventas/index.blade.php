<x-layout>
<div class="text-right" style="padding-top: 30px;">
<a href="{{ route('ventas.create') }}" class="inline-block">
    <button class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"> + Crear Venta</button>
</a>
</div>

<div class="table-responsive" style="padding-top: 40px;">
@if($ventas->count() > 0)
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                ID venta
                </th>
                <th scope="col" class="px-6 py-3">
                ID producto
                </th>
                <th scope="col" class="px-6 py-3">
                Fecha de Venta
                </th>
                <th scope="col" class="px-6 py-3">
                Total productos
                </th>
                <th scope="col" class="px-6 py-3">
                Precio Total 
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($ventas as $venta)
         @foreach($venta->productos as $producto)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $venta->id }}
                </th>
                <td class="px-6 py-4">
                {{ $producto->id }}
                </td>
                <td class="px-6 py-4">
                {{ $venta->fecha_venta }}
                </td>
                <td class="px-6 py-4">
                {{ $producto->pivot->cantidad }}
                </td>
                <td class="px-6 py-4">
                {{ $venta->total_venta }}€
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="/ventas/{{ $venta['id'] }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ver</a>
                </td>
            </tr>
            @endforeach
            @endforeach
        </tbody>
    </table>
    </div>
    <div class="mt-4">
            {{ $ventas->links() }}
        </div>
     @endif
</div>
</x-layout>