<x-layout>
    <x-slot:heading>
        Productos
    </x-slot:heading>

    <ul class="flex flex-wrap -mx-4">
        @foreach ($productos as $producto)
            <li class="w-full md:w-1/3 px-4 mb-4">
                <a href="/productos/{{ $producto['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                    <div>
                        <img src="{{ asset('images/tablaMañio.png') }}" alt="{{ $producto['titulo'] }}" class="mb-4 w-full h-auto object-cover rounded-lg">
                        <div>
                            <strong>{{ $producto['titulo'] }}</strong>
                        </div>
                        <div>
                            Tiene un costo por unidad de {{ $producto['precio'] }}.
                        </div>
                    </div>
                </a>
            </li>
        @endforeach
        <div>
          {{$productos->links()}}  
        </div>
    </ul>
</x-layout>