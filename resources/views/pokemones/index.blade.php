<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl text-white font-semibold leading-tight">
            Pokemones
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($pokemones as $pokemon)
                    <div class="bg-white p-4 rounded shadow">
                        <h5 class="text-lg font-bold text-gray-800 capitalize mb-2">
                            <a href="{{ route('pokemones.show', $pokemon['name']) }}" class="hover:text-indigo-600">
                                {{ $pokemon['name'] }}
                            </a>
                        </h5>

                        <img src="{{ $pokemon['imagen'] ?? 'https://via.placeholder.com/150' }}" 
                             alt="{{ $pokemon['name'] }}" 
                             class="w-full h-32 object-contain mb-3">

                        <div class="text-center">
                            <a href="{{ route('pokemones.show', $pokemon['name']) }}"
                               class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white text-sm font-semibold px-3 py-1 rounded">
                                Ver más
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</x-app-layout>
