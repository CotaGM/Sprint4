<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    </head>
<body class="h-full">
<div class="min-h-full">
  <nav class="bg-white shadow h-24"> 
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 h-full"> 
      <div class="flex h-full items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
           
            <img class="h-20 w-20" src="{{ asset('images/logomarketplace.png') }}" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
              <x-nav-link href="/productos" :active="request()->is('productos')">Productos</x-nav-link>
              <x-nav-link href="/ventas" :active="request()->is('ventas')">Ventas</x-nav-link>
            </div>
          </div>
        </div>
    </div>
  </nav>
  <header class="bg-white shadow">
    <div class="relative">
      <img src="{{ asset('images/portada3.png') }}" alt="Descripción de la imagen" class="w-full h-64 object-cover object-center">
      <div class="absolute inset-0 flex items-center justify-center">
      </div>
    </div>
  </header>
  
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      {{$slot}}
    </div>
  </main>
</div>
</body>
</html>
