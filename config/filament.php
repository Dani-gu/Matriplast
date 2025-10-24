<?php

return [

    'broadcasting' => [

        // 'echo' => [
        //     'broadcaster' => 'pusher',
        //     'key' => env('VITE_PUSHER_APP_KEY'),
        //     'cluster' => env('VITE_PUSHER_APP_CLUSTER'),
        //     'wsHost' => env('VITE_PUSHER_HOST'),
        //     'wsPort' => env('VITE_PUSHER_PORT'),
        //     'wssPort' => env('VITE_PUSHER_PORT'),
        //     'authEndpoint' => '/broadcasting/auth',
        //     'disableStats' => true,
        //     'encrypted' => true,
        //     'forceTLS' => true,
        // ],
    ],

    'default_filesystem_disk' => env('FILAMENT_FILESYSTEM_DISK', 'public'),

    'assets_path' => null,

    'cache_path' => base_path('bootstrap/cache/filament'),

    'livewire_loading_delay' => 'default',

    'system_route_prefix' => 'filament',

    /*
    |--------------------------------------------------------------------------
    | Branding
    |--------------------------------------------------------------------------
    |
    | Aquí configuramos el título y el logo del panel y login
    |
    */
    'name' => 'Matriplast',

    'branding' => [
        'logo' => '/images/logo-azul.svg', // Cambia por la ruta de tu logo
    ],

    /*
    |--------------------------------------------------------------------------
    | Tema
    |--------------------------------------------------------------------------
    |
    | Cambiar colores del panel, botones y acentos
    |
    */
    'theme' => [
        'primary' => '#3B82F6', // Azul
    ],
];
