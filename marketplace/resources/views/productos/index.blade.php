<x-layout>

      <div class="space-y-4"> 

        @foreach ($productos as $producto)
            <img src="{{ $producto->imagen }}" alt="{{ $producto->titulo }}" width="350">
                    </a>
                        <div>
                            <strong>{{ $producto->titulo }}</strong>
                        </div>
                        <div>
                            {{ $producto->precio }}€
                        </div>
                    </div>
                </a>
            </li>
        @endforeach
        
    
    </div>
</x-layout>