<x-layout>
    <div class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach ($productos as $producto)
                <div class="border p-4 rounded-lg">
                    <a href="{{ route('productos.show', $producto->id) }}">
                        <img src="{{ asset($producto->imagen) }}" width="200" class="w-full h-70 object-cover mb-4">
                        <strong class="block text-xl mb-2">{{ $producto->titulo }}</strong>
                        <p class="text-lg">{{ $producto->precio }}€</p>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $productos->links() }}
        </div>
    </div>
</x-layout>
