<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-6">

                {{-- Título centrado y botón a la derecha --}}
                <div class="flex items-center justify-between mb-4">
                    {{-- Espacio invisible para balancear el botón --}}
                    <div class="w-[150px]"></div> {{-- Ajusta el ancho según el botón --}}

                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 text-center flex-1">
                        Listado de productos
                    </h2>

                    {{-- Botón de añadir producto --}}
                    <a href="{{ route('productos.create') }}"
                       class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md
                              hover:bg-blue-700 transition text-sm sm:text-base">
                        + Añadir producto
                    </a>
                </div>

                @if ($productos->count())
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-200 text-sm">
                            <thead class="bg-gray-100 text-gray-700">
                                <tr>
                                    <th class="px-4 py-2 border">Código</th>
                                    <th class="px-4 py-2 border">Nombre</th>
                                    <th class="px-4 py-2 border">Fabricante</th>
                                    <th class="px-4 py-2 border">Fecha de llegada</th>
                                    <th class="px-4 py-2 border">Disponible</th>
                                    <th class="px-4 py-2 border text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $producto)
                                    <tr class="hover:bg-gray-50 text-center">
                                        <td class="px-4 py-2 border">{{ $producto->codigo }}</td>
                                        <td class="px-4 py-2 border">{{ $producto->nombre }}</td>
                                        <td class="px-4 py-2 border">{{ $producto->fabricante }}</td>
                                        <td class="px-4 py-2 border">
                                            {{ \Carbon\Carbon::parse($producto->fecha_llegada)->format('d/m/Y') }}
                                        </td>
                                        <td class="px-4 py-2 border">
                                            {{ $producto->disponible ? 'Sí' : 'No' }}
                                        </td>
                                        <td class="px-4 py-2 border text-center space-x-1">
                                            <a href="{{ route('productos.edit', $producto->id) }}"
                                               class="inline-block px-3 py-1 bg-yellow-400 text-white rounded
                                                      hover:bg-yellow-500 text-xs transition">
                                                Editar
                                            </a>

                                            <form action="{{ route('productos.destroy', $producto->id) }}"
                                                  method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="px-3 py-1 bg-red-600 text-white rounded
                                                               hover:bg-red-700 text-xs transition"
                                                        onclick="return confirm('¿Seguro que deseas eliminar este producto?')">
                                                    Eliminar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-center text-gray-500">
                        No hay productos disponibles.
                    </p>
                @endif

            </div>
        </div>
    </div>

</x-app-layout>

