<x-layout>
    <x-slot:heading>
        Productos
    </x-slot:heading>

    <ul class="flex flex-wrap -mx-4">

        @foreach ($productos as $producto)
            <li class="w-full md:w-1/3 px-4 mb-4">
            <img src="{{ $producto->imagen }}" alt="{{ $producto->titulo }}" width="200">
                    </a>
                     <div>
                        @if($producto->imagen)
                            <img class="img-fluid" src="/storage/{{ $producto->imagen }}" class="mb-4 w-full h-auto object-cover rounded-lg">
                        @endif
                        <div>
                            <strong>{{ $producto->titulo }}</strong>
                        </div>
                        <div>
                            Tiene un costo por unidad de {{ $producto->precio }}.
                        </div>
                    </div>
                </a>
            </li>
        @endforeach
        <div>
          {{ $productos->links() }}  
        </div>
    </ul>
</x-layout>

