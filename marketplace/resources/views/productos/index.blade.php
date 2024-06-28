
<x-layout>
    <div class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($productos as $producto)
                <div class="border p-4">
                    <a href="/productos/{{ $producto['id'] }}" >
                        <img src="{{ $producto->imagen }}" alt="{{ $producto->titulo }}" class="w-full h-64 object-cover">
                        <div class="mt-2">
                            <strong>{{ $producto->titulo }}</strong>
                            <h1>{{ $producto->precio }}€</h1>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="mt-4">
        {{ $productos->links() }}
    </div>
</x-layout>
