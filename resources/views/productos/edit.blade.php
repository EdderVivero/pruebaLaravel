<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl text-white font-semibold leading-tight">
            Editar producto
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow sm:rounded-lg p-6">
                <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    {{-- Nombre --}}
                    <div class="mb-4">
                        <label for="nombre" class="block text-gray-700 font-medium mb-2">Nombre</label>
                        <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}" required
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    {{-- Descripción --}}
                    <div class="mb-4">
                        <label for="descripcion" class="block text-gray-700 font-medium mb-2">Descripción</label>
                        <textarea name="descripcion" id="descripcion" rows="3" required
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">{{ $producto->descripcion }}</textarea>
                    </div>

                    {{-- Precio --}}
                    <div class="mb-4">
                        <label for="precio" class="block text-gray-700 font-medium mb-2">Precio</label>
                        <input type="number" step="0.01" name="precio" id="precio" value="{{ $producto->precio }}" required
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    {{-- Stock --}}
                    <div class="mb-4">
                        <label for="stock" class="block text-gray-700 font-medium mb-2">Stock</label>
                        <input type="number" name="stock" id="stock" value="{{ $producto->stock }}" required
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    {{-- Botones --}}
                    <div class="flex justify-between">
                        <a href="{{ route('productos.index') }}" class="text-indigo-600 hover:text-indigo-800">
                            ← Cancelar
                        </a>
                        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded">
                            Actualizar
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
