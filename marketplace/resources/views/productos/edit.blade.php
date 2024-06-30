<x-layout>
<div class="container">
  <div class="col-12">
<div class="space-y-12">
<div class="border-b border-gray-900/10 pb-12">
  <h2 class="text-base font-semibold leading-7 text-gray-900">Editar producto</h2>
  <p class="mt-1 text-sm leading-6 text-gray-600">Actualiza la información del producto.</p>

<form method="POST" action="{{ route('productos.update', $producto->id) }}" enctype="multipart/form-data">
@csrf
@method('PUT')

<!-- TITULO-->
  <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
    <div class="sm:col-span-4">
      <label for="titulo" class="block text-sm font-medium leading-6 text-gray-900">Título</label>
      <div class="mt-2">
        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
          <input type="text" name="titulo" id="titulo" autocomplete="titulo" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"value="{{ $producto->titulo}}"required>
      </div>
      </div>
    </div>
    @error('titulo')
          <p class="text-red-500 text-sm">{{ $message }}</p>
          @enderror

  <!-- DESCRIPCION-->        
  <div class="col-span-full">
    <label for="descripcion" class="block text-sm font-medium leading-6 text-gray-900">Descripción</label>
     <div class="mt-2">
      <textarea id="descripcion" name="descripcion" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>{{ $producto->descripcion }}</textarea>
     </div>
   <p class="mt-3 text-sm leading-6 text-gray-600">Escribe una breve descripción del producto.</p>
  </div>
  </div>
    @error('descripcion')
          <p class="text-red-500 text-sm">{{ $message }}</p>
          @enderror

 <!-- PRECIO-->         
    <div class="sm:col-span-3">
      <label for="precio" class="block text-sm font-medium leading-6 text-gray-900">Precio</label>
      <div class="mt-2">
        <input type="text" name="precio" id="precio" autocomplete="precio" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"value="{{ $producto->precio}}"required>
      </div>
    </div>
    @error('precio')
          <p class="text-red-500 text-sm">{{ $message }}</p>
          @enderror

<!-- IMAGEN-->
      <div class="sm:col-span-3">
        <label for="imagen" class="block text-sm font-medium leading-6 text-gray-900">Imagen</label>
        <div class="mt-2">
          <input type="file" id="imagen" name="imagen" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
      </div>
      </div>
      @error('imagen')
          <p class="text-red-500 text-sm">{{ $message }}</p>
          @enderror

<!-- ARTESANO-->      
    <div class="sm:col-span-3">
      <label for="artesano" class="block text-sm font-medium leading-6 text-gray-900">Artesano</label>
      <div class="mt-2">
        <input type="text" name="artesano" id="artesano" autocomplete="artesano" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"value="{{ $producto->artesano}}"required>
      </div>
    </div>
    @error('artesano')
          <p class="text-red-500 text-sm">{{ $message }}</p>
          @enderror

<!-- LOCALIDAD-->
    <div class="sm:col-span-3">
      <label for="localidad" class="block text-sm font-medium leading-6 text-gray-900">Localidad</label>
      <div class="mt-2">
        <input  type="text" name="localidad" id="localidad" autocomplete="localidad"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"value="{{ $producto->localidad}}"required>
      </div>
    </div>
    @error('localidad')
          <p class="text-red-500 text-sm">{{ $message }}</p>
          @enderror

<!-- PAIS-->
    <div class="sm:col-span-3">
      <label for="pais" class="block text-sm font-medium leading-6 text-gray-900">País</label>
        <div class="mt-2">
         <select id="pais" name="pais" autocomplete="pais" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
          <option value="Chile" {{ $producto->pais == 'Chile' ? 'selected' : '' }}>Chile</option>
          <option value="Perú" {{ $producto->pais == 'Perú' ? 'selected' : '' }}>Perú</option>
          <option value="Colombia" {{ $producto->pais == 'Colombia' ? 'selected' : '' }}>Colombia</option>
          <option value="México" {{ $producto->pais == 'México' ? 'selected' : '' }}>México</option>
         </select>
        </div>
     </div>

    @error('pais')
          <p class="text-red-500 text-sm">{{ $message }}</p>
          @enderror

<!-- TIPO-->          
     <div class="sm:col-span-3">
       <label for="tipo" class="block text-sm font-medium leading-6 text-gray-900">Tipo</label>
        <div class="mt-2">
         <select id="tipo" name="tipo" autocomplete="tipo" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
          <option value="Decoración" {{ $producto->tipo == 'Decoración' ? 'selected' : '' }}>Decoración</option>
          <option value="Textil" {{ $producto->tipo == 'Textil' ? 'selected' : '' }}>Textil</option>
          <option value="Cocina" {{ $producto->tipo == 'Cocina' ? 'selected' : '' }}>Cocina</option>
         </select>
        </div>
     </div>
    @error('tipo')
          <p class="text-red-500 text-sm">{{ $message }}</p>
          @enderror

<!-- MATERIAL-->
     <div class="sm:col-span-3">
      <label for="material" class="block text-sm font-medium leading-6 text-gray-900">Material</label>
       <div class="mt-2">
        <input type="text" name="material" id="material" autocomplete="material" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"value="{{ $producto->material}}"required>
      </div>
     </div>

    @error('material')
          <p class="text-red-500 text-sm">{{ $message }}</p>
          @enderror

    </div>
  <!-- BOTONES DE ACTULIZAR Y CANCELAR-->
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="{{ route('productos.index') }}" class="text-sm font-semibold leading-6 text-gray-900">Cancelar</a>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Actualizar</button>
    </div>
  </form>

  <!-- BOTONES DE DELETE-->
  <form method="POST" action="{{ route('productos.destroy', $producto->id) }}" class="mt-6">
      @csrf
      @method('DELETE')
      <button type="submit" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Eliminar</button>
  </form>

</div>
</div>

</div>
</div>
</x-layout>
