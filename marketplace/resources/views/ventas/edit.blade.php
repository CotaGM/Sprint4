
<x-layout>
<div class="container">
    <div class="col-12">
    <form method="POST" action="{{ route('ventas.update', $venta->id) }}">
@csrf
@method('PUT')

<div class="space-y-12">
  <div class="border-b border-gray-900/10 pb-12">
    <h2 class="text-base font-semibold leading-7 text-gray-900">Subir producto</h2>
    <p class="mt-1 text-sm leading-6 text-gray-600">El producto se mostrará en la página inmediatamente al momento de guardar.</p>


<!-- FECHA -->    
      <div class="sm:col-span-3">
        <label for="fecha_venta" class="block text-sm font-medium leading-6 text-gray-900">Fecha Venta</label>
        <div class="mt-2">
        <input type="date" id="fecha_venta" name="fecha_venta" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" value="{{ $venta->fecha_venta }}" required>
      </div>
      @error('fecha_venta')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror


<!-- ID PRODUCTO-->
      <div class="sm:col-span-3">
        <label for="id_producto" class="block text-sm font-medium leading-6 text-gray-900">ID producto</label>
        <div class="mt-2">
        <input type="number" name="id_producto" id="id_producto" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" value="{{ $venta->id_producto }}" required>
        </div>
      </div>
      @error('id_producto')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

<!-- CANTIDAD-->
<div class="sm:col-span-3">
        <label for="cantidad" class="block text-sm font-medium leading-6 text-gray-900">Cantidad</label>
        <div class="mt-2">
        <input type="number" name="cantidad" id="cantidad" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" value="{{ $venta->cantidad }}" required>
        </div>
      </div>
      @error('cantidad')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

<!-- TOTAL VENTA-->
<div class="sm:col-span-3">
        <label for="total_venta" class="block text-sm font-medium leading-6 text-gray-900">Total venta</label>
        <div class="mt-2">
        <input type="number" name="total_venta" id="total_venta" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"value="{{ $venta->total_venta }}"required>
        </div>
      </div>
      @error('total_venta')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror


    </div>
  </div>
</div>

<!-- BOTONES DE ACTULIZAR Y CANCELAR-->
<div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="{{ route('ventas.index') }}" class="rounded-md bg-white px-3 py-2 text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancelar</a>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Actualizar</button>
    </div>
</form>
</x-layout>

