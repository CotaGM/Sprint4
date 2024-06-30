<x-layout>
    <div class="space-y-4">
        <ul>
            @foreach ($productos as $producto)
                <li>
                    <img src="{{ asset($producto->imagen) }}" width="350">
                        <strong>{{ $producto->titulo }}</strong>
                        <p>{{ $producto->precio }}€</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
