<div class="min-h-screen bg-gray-100 py-12 px-6 flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-2xl">
        <div class="text-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">¡Bienvenida al Dashboard de Chicas 😍!</h1>
        </div>

        <div class="space-y-4">
            <div class="text-xl font-semibold text-gray-700">
                <p>Bienvenida, <span class="text-teal-500">{{ $chica->nombre }}</span></p>
                <p class="mt-2">Tu ranking actual es: <strong class="text-indigo-600">{{ ucfirst($chica->ranking) }}</strong></p>
            </div>

            <div class="space-y-2 text-gray-600">
                <p>Email: <span class="text-gray-800">{{ $chica->email }}</span></p>
                <p>País: <span class="text-gray-800">{{ $chica->pais ?? 'No especificado' }}</span></p>
                <p>Teléfono: <span class="text-gray-800">{{ $chica->telefono ?? 'No especificado' }}</span></p>
                <p>Biografía: <span class="text-gray-800">{{ $chica->biografia ?? 'No disponible' }}</span></p>
                <p>Edad: <span class="text-gray-800">{{ $chica->edad ?? 'No especificada' }}</span></p>
            </div>

            <div class="flex justify-between items-center mt-6">
                <button wire:click="logout" class="bg-red-500 text-white px-6 py-2 rounded-lg hover:bg-red-600 transition ease-in-out duration-300">
                    Cerrar Sesión
                </button>

                <a href="{{-- {{ route('chicas.profile') }} --}}" class="text-indigo-600 hover:text-indigo-800">Editar perfil</a>
            </div>
        </div>
    </div>
</div>
