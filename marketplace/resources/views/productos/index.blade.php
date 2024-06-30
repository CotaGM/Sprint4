<x-layout>
    <div class="space-y-4">
        <ul>
            @foreach ($productos as $producto)
                <li>
                    <a href="{{ route('productos.show', $producto->id) }}">
                    <img src="{{ asset($producto->imagen) }}" width="500">
                        <strong>{{ $producto->titulo }}</strong>
                        <p>{{ $producto->precio }}€</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
