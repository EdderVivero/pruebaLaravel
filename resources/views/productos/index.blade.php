<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-white font-semibold-800 leading-tight">
            Productos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex justify-between mb-6">
                <h2 class="text-2xl font-medium text-white font-semibold-700">Lista de Productos</h2>
                <a href="{{ route('productos.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                    + Nuevo Producto
                </a>
            </div>
            <!-- Tabla de productos con los encabezados de cada columna-->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <table class="table-auto w-full text-left border">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 border">Nombre</th>
                            <th class="px-4 py-2 border">Descripción</th>
                            <th class="px-4 py-2 border">Precio(MXN)</th>
                            <th class="px-4 py-2 border">Stock</th>
                            <th class="px-4 py-2 border">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($productos as $producto)
                            <tr>
                                <td class="border px-4 py-2">{{ $producto->nombre }}</td>
                                <td class="border px-4 py-2">{{ $producto->descripcion }}</td>
                                <td class="border px-4 py-2">${{ $producto->precio }}</td>
                                <td class="border px-4 py-2">{{ $producto->stock }}</td>
                                <td class="border px-4 py-2 flex space-x-2">
                                    <a href="{{ route('productos.edit', $producto->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-sm">
                                        Editar
                                    </a>
                                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" onsubmit="return confirm('¿Eliminar este producto?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4">No hay productos registrados.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
