<x-app-layout>
    <!-- Encabezado de la página -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Productos
        </h2>
    </x-slot>

    <!-- Contenido principal -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <!-- Botón Crear producto -->
                <div class="mb-4">
                    <a href="{{ route('productos.create') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                        Create producto
                    </a>
                </div>

                <!-- Tabla de productos -->
                @if ($productos->count())
                    <table class="min-w-full border border-gray-200">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 border">Código</th>
                                <th class="px-4 py-2 border">Nombre</th>
                                <th class="px-4 py-2 border">Fabricante</th>
                                <th class="px-4 py-2 border">Fecha de llegada</th>
                                <th class="px-4 py-2 border">Disponible</th>
                                <th class="px-4 py-2 border">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td class="px-4 py-2 border">{{ $producto->codigo }}</td>
                                    <td class="px-4 py-2 border">{{ $producto->nombre }}</td>
                                    <td class="px-4 py-2 border">{{ $producto->fabricante }}</td>
                                    <td class="px-4 py-2 border">{{ $producto->fecha_llegada }}</td>
                                    <td class="px-4 py-2 border">{{ $producto->disponible }}</td>
                                    <td class="px-4 py-2 border">
                                        <a href="{{ route('productos.edit', $producto->id) }}" class="inline-block px-2 py-1 bg-yellow-400 text-white rounded hover:bg-yellow-500 text-sm">Edit</a>
                                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="inline-block px-2 py-1 bg-red-600 text-white rounded hover:bg-red-700 text-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No hay productos disponibles.</p>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>
