<x-layout>
      <div class="space-y-4"> 
      <ul>
        @foreach ($productos as $producto)
            <li>
                <a href="/productos/{{ $producto['id'] }}" >
                <img src="{{ $producto->imagen }}" alt="{{ $producto->titulo }}" width="350">
                   <strong> {{ $producto->titulo }} </strong>
                   <h2>{{ $producto->precio }}€</h2>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>