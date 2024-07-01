<x-layout>
    <div class="text-right" style="padding-top: 30px;">
        <a href="{{ route('productos.create') }}" class="inline-block">
            <button class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"> + Subir producto</button>
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
        @foreach ($productos as $producto)
            <div class="border p-4 rounded-lg">
                <a href="{{ route('productos.show', $producto->id) }}">
                    <img src="{{ asset($producto->imagen) }}" class="w-full h-64 object-cover mb-4" alt="{{ $producto->titulo }}">
                    <p class="text-sm font-semibold text-gray-600 sm:text-base dark:text-white">{{ $producto->titulo }}</p>
                </a>
            </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $productos->links() }}
    </div>
</x-layout>
