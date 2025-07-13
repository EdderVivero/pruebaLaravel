<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl text-white font-semibold leading-tight">
            Detalles de {{ ucfirst($pokemon['name']) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        
            <div class="bg-white shadow sm:rounded-lg p-6">
                <!-- boton de regreso -->
            <!-- Botón de regreso -->
            <div class="mt-6">
                <a href="{{ route('pokemones.index') }}"
                class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded">
                    ← Regresar a la lista
                </a>
            </div>
                @php
                    $img = $pokemon['sprites']['other']['official-artwork']['front_default'] 
                        ?? $pokemon['sprites']['front_default'] 
                        ?? 'https://via.placeholder.com/200';
                @endphp

                <div class="flex flex-col items-center mb-6">
                    <img src="{{ $img }}" alt="{{ $pokemon['name'] }}" class="w-48 h-48 object-contain mb-4">
                    <h3 class="text-xl font-bold text-gray-800 capitalize">
                        {{ $pokemon['name'] }}
                    </h3>
                </div>

                <ul class="space-y-2 text-gray-700">
                    <li><strong>ID:</strong> {{ $pokemon['id'] }}</li>
                    <li><strong>Altura:</strong> {{ $pokemon['height'] / 10 }} m</li>
                    <li><strong>Peso:</strong> {{ $pokemon['weight'] / 10 }} kg</li>

                    <li><strong>Tipo(s):</strong>
                        @foreach($pokemon['types'] as $type)
                            <span class="inline-block bg-blue-200 text-blue-800 px-2 py-1 rounded text-sm mr-1 capitalize">
                                {{ $type['type']['name'] }}
                            </span>
                        @endforeach
                    </li>

                    <li><strong>Habilidad(es):</strong>
                        @foreach($pokemon['abilities'] as $ability)
                            <span class="inline-block bg-green-200 text-green-800 px-2 py-1 rounded text-sm mr-1 capitalize">
                                {{ $ability['ability']['name'] }}
                            </span>
                        @endforeach
                    </li>
                </ul>

            </div>

        </div>
    </div>
</x-app-layout>
