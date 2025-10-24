<x-filament::guest-layout>
    <x-filament::card class="max-w-md mx-auto mt-10 p-6">
        <h1 class="text-2xl font-bold text-center text-blue-600 mb-6">Inicio de sesión</h1>

        <form method="POST" action="{{ route('filament.auth.authenticate') }}">
            @csrf

            <!-- Correo electrónico -->
            <div class="mb-4">
                <x-filament::input
                    type="email"
                    name="email"
                    :label="'Correo electrónico'"
                    required
                    autofocus
                />
            </div>

            <!-- Contraseña -->
            <div class="mb-4">
                <x-filament::input
                    type="password"
                    name="password"
                    :label="'Contraseña'"
                    required
                />
            </div>

            <!-- Recordarme -->
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember" class="text-sm text-gray-700">Recordarme</label>
            </div>

            <!-- Botón -->
            <x-filament::button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white">
                Iniciar sesión
            </x-filament::button>
        </form>
    </x-filament::card>
</x-filament::guest-layout>
