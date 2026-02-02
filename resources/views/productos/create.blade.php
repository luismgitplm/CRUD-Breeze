<x-app-layout>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-6">

                {{-- Título --}}
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 text-center mb-4">
                    Añadir nuevo producto
                </h2>

                {{-- Formulario --}}
                <form action="{{ route('productos.store') }}" method="POST" class="space-y-4">
                    @csrf

                    {{-- Código --}}
                    <div>
                        <label for="codigo" class="block text-gray-700 font-medium mb-1">Código</label>
                        <input type="text" name="codigo" id="codigo" maxlength="3"
                               class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                               value="{{ old('codigo') }}">
                        @error('codigo')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Nombre --}}
                    <div>
                        <label for="nombre" class="block text-gray-700 font-medium mb-1">Nombre</label>
                        <input type="text" name="nombre" id="nombre" maxlength="30"
                               class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                               value="{{ old('nombre') }}">
                        @error('nombre')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Fabricante --}}
                    <div>
                        <label for="fabricante" class="block text-gray-700 font-medium mb-1">Fabricante</label>
                        <input type="text" name="fabricante" id="fabricante" maxlength="30"
                               class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                               value="{{ old('fabricante') }}">
                        @error('fabricante')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Fecha de llegada --}}
                    <div>
                        <label for="fecha_llegada" class="block text-gray-700 font-medium mb-1">Fecha de llegada</label>
                        <input type="date" name="fecha_llegada" id="fecha_llegada"
                               class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                               value="{{ old('fecha_llegada') }}">
                        @error('fecha_llegada')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Disponible --}}
                    <div class="flex items-center space-x-2">
                        <input type="checkbox" name="disponible" id="disponible" value="1"
                               class="h-4 w-4 text-blue-600 border-gray-300 rounded"
                               {{ old('disponible') ? 'checked' : '' }}>
                        <label for="disponible" class="text-gray-700 font-medium">Disponible</label>
                    </div>

                    {{-- Botón enviar --}}
                    <div class="flex justify-center mt-4">
                        <button type="submit"
                                class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                            Guardar producto
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</x-app-layout>
