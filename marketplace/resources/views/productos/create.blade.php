<x-layout>
<div class="container">
    <div class="col-12">
    <form method="post" action="{{ route('productos.store') }}" enctype="multipart/form-data">
@csrf
<div class="space-y-12">
  <div class="border-b border-gray-900/10 pb-12">
    <h2 class="text-base font-semibold leading-7 text-gray-900">Subir producto</h2>
    <p class="mt-1 text-sm leading-6 text-gray-600">El producto se mostrará en la página inmediatamente al momento de guardar.</p>

<!-- TITULO -->
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
      <div class="sm:col-span-4">
        <label for="titulo" class="block text-sm font-medium leading-6 text-gray-900">Título</label>
        <div class="mt-2">
          <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
            <input type="text" name="titulo" id="titulo" autocomplete="titulo" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"required>
          </div>
        </div>
      </div>
      @error('titulo')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

<!-- DESCRIPCION -->            
      <div class="col-span-full">
        <label for="descripcion" class="block text-sm font-medium leading-6 text-gray-900">Descripción</label>
        <div class="mt-2">
          <textarea id="descripcion" name="descripcion" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"required></textarea>
        </div>
        <p class="mt-3 text-sm leading-6 text-gray-600">Escribe una breve descripción del producto.</p>
      </div>
      @error('descripcion')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

<!-- PRECIO -->           
      <div class="sm:col-span-3">
        <label for="precio" class="block text-sm font-medium leading-6 text-gray-900">Precio</label>
        <div class="mt-2">
          <input type="number" name="precio" id="precio" autocomplete="precio" step="0.01" min="0" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"required>
          <p class="mt-3 text-sm leading-6 text-gray-600">Ingresa solo números</p>
        </div>
      </div>
      @error('precio')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

<!-- IMAGEN -->
        <div class="sm:col-span-3">
          <label for="imagen" class="block text-sm font-medium leading-6 text-gray-900">Imagen</label>
          <div class="mt-2">
            <input type="file" id="imagen" name="imagen" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"required>
          </div>
        </div>
        @error('imagen')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

<!-- ARTESANO -->    
      <div class="sm:col-span-3">
        <label for="artesano" class="block text-sm font-medium leading-6 text-gray-900">Artesano</label>
        <div class="mt-2">
          <input type="text" name="artesano" id="artesano" autocomplete="artesano" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"required>
        </div>
      </div>
      @error('artesano')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

<!-- LOCALIDAD -->
      <div class="sm:col-span-3">
        <label for="localidad" class="block text-sm font-medium leading-6 text-gray-900">Localidad</label>
        <div class="mt-2">
          <input type="text" name="localidad" id="localidad" autocomplete="localidad" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"required>
        </div>
      </div>
      @error('localidad')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

<!-- PAIS -->            
      <div class="sm:col-span-3">
        <label for="pais" class="block text-sm font-medium leading-6 text-gray-900">País</label>
        <div class="mt-2">
          <select id="pais" name="pais" autocomplete="pais" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
            <option>Chile</option>
            <option>Perú</option>
            <option>Colombia</option>
            <option>México</option>
          </select>
        </div>
      </div>
      @error('pais')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

<!-- TIPO -->
      <div class="sm:col-span-3">
        <label for="tipo" class="block text-sm font-medium leading-6 text-gray-900">Tipo</label>
        <div class="mt-2">
          <select id="tipo" name="tipo" autocomplete="tipo" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
            <option>Decoración</option>
            <option>Textil</option>
            <option>Cocina</option>
          </select>
        </div>
      </div>
      @error('tipo')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
  
<!-- MATERIAL -->
      <div class="sm:col-span-3">
        <label for="material" class="block text-sm font-medium leading-6 text-gray-900">Material</label>
        <div class="mt-2">
          <input type="text" name="material" id="material" autocomplete="material" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"required>
        </div>
      </div>
      @error('material')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
            
    </div>
  </div>
</div>

<!-- BOTONES DE ACTULIZAR Y CANCELAR-->
<div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="{{ route('productos.index') }}" class="rounded-md bg-white px-3 py-2 text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancelar</a>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Actualizar</button>
    </div>

</form>
</x-layout>

