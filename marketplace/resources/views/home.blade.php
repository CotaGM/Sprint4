<x-layout>
    <x-slot:heading>
        Home page
    </x-slot:heading>
    <h1>Aca van algunos productos</h1> 
    <ul>
        @foreach ($productos as $producto)
          <li>
            <a href = "/{{$producto['id']}}">
              <strong>{{ $producto['titulo']}}:</strong> Precio por unidad {{$producto['precio']}}
            </a>
          </li>
        @endforeach
     </ul>
</x-layout>