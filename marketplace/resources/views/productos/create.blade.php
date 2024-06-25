<x-layout>
   
<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<div class="container">
    <div class="col-12">
    <form method="post" action="{{ route('productos.store') }}" enctype="multipart/form-data">
@csrf
<div class="space-y-12">
  <div class="border-b border-gray-900/10 pb-12">
    <h2 class="text-base font-semibold leading-7 text-gray-900">Subir producto</h2>
    <p class="mt-1 text-sm leading-6 text-gray-600">El producto se mostrará en la página inmediatamente al momento de guardar.</p>

    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
      <div class="sm:col-span-4">
        <label for="titulo" class="block text-sm font-medium leading-6 text-gray-900">Título</label>
        <div class="mt-2">
          <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
            <input type="text" name="titulo" id="titulo" autocomplete="titulo" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
      </div>

      <div class="col-span-full">
        <label for="descripcion" class="block text-sm font-medium leading-6 text-gray-900">Descripción</label>
        <div class="mt-2">
          <textarea id="descripcion" name="descripcion" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
        </div>
        <p class="mt-3 text-sm leading-6 text-gray-600">Escribe una breve descripción del producto.</p>
      </div>

      <div class = "grid gris-cols-1 mt5 mx7"> 
          <img id = "imagenSeleccionada" style ="max-height:300px">
      </div>

      <div class="form-group mb-4">
          <label for="imagen" class="block text-sm font-medium leading-6 text-gray-900">Imagen</label>
            <input type="file" id="logo" name="logo" class="form-control border border-gray-300 rounded-lg p-2 w-full">
        </div>

      <div class="sm:col-span-3">
        <label for="precio" class="block text-sm font-medium leading-6 text-gray-900">Precio</label>
        <div class="mt-2">
          <input type="text" name="precio" id="precio" autocomplete="precio" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div class="sm:col-span-3">
        <label for="artesano" class="block text-sm font-medium leading-6 text-gray-900">Artesano</label>
        <div class="mt-2">
          <input type="text" name="artesano" id="artesano" autocomplete="artesano" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div class="sm:col-span-3">
        <label for="localidad" class="block text-sm font-medium leading-6 text-gray-900">Localidad</label>
        <div class="mt-2">
          <input type="text" name="localidad" id="localidad" autocomplete="localidad" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

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

      <div class="sm:col-span-3">
        <label for="material" class="block text-sm font-medium leading-6 text-gray-900">Material</label>
        <div class="mt-2">
          <input type="text" name="material" id="material" autocomplete="material" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mt-6 flex items-center justify-end gap-x-6">
  <a class="text-sm font-semibold leading-6 text-gray-900">Cancelar</button>
  <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar</button>
</div>
</form>
<div class="flex justify-center my-5">
    <a href="{{ route('productos.index') }}" class="text-white bg-red-500 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Volver</a>
</div>
</x-layout>

