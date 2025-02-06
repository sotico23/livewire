<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Valores Predeterminados de Autenticación
    |--------------------------------------------------------------------------
    |
    | Esta opción controla el guard de autenticación predeterminado y las
    | opciones de restablecimiento de contraseñas para tu aplicación. Puedes
    | cambiar estos valores según sea necesario, pero son un buen comienzo
    | para la mayoría de las aplicaciones.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Guards de Autenticación
    |--------------------------------------------------------------------------
    |
    | Aquí puedes definir cada guard de autenticación para tu aplicación.
    | Una gran configuración predeterminada ha sido definida para ti, la
    | cual utiliza almacenamiento de sesión y el proveedor de usuarios
    | Eloquent.
    |
    | Todos los controladores de autenticación tienen un proveedor de
    | usuarios. Esto define cómo los usuarios son realmente recuperados
    | desde tu base de datos u otros mecanismos de almacenamiento
    | utilizados por esta aplicación para persistir los datos de tus usuarios.
    |
    | Soportado: "session"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'chica' => [
            'driver' => 'session',
            'provider' => 'chicas',
        ],
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
        'cafe' => [
            'driver' => 'session',
            'provider' => 'cafes',
        ],
        'spa' => [
            'driver' => 'session',
            'provider' => 'spas',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Proveedores de Usuarios
    |--------------------------------------------------------------------------
    |
    | Todos los controladores de autenticación tienen un proveedor de usuarios.
    | Esto define cómo los usuarios son realmente recuperados desde tu base
    | de datos u otros mecanismos de almacenamiento utilizados por esta
    | aplicación para persistir los datos de tus usuarios.
    |
    | Si tienes múltiples tablas o modelos de usuarios, puedes configurar
    | múltiples fuentes que representen cada modelo/tabla. Estas fuentes
    | pueden ser asignadas a cualquier guard de autenticación adicional
    | que hayas definido.
    |
    | Soportado: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],
        'chicas' => [
            'driver' => 'eloquent',
            'model' => App\Models\Chica::class,
        ],
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,
        ],
        'spas' => [
            'driver' => 'eloquent',
            'model' => App\Models\Spa::class,
        ],
        'cafes' => [
            'driver' => 'eloquent',
            'model' => App\Models\Cafe::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Restablecimiento de Contraseñas
    |--------------------------------------------------------------------------
    |
    | Puedes especificar múltiples configuraciones de restablecimiento de
    | contraseñas si tienes más de una tabla o modelo de usuarios en la
    | aplicación y quieres tener configuraciones separadas de restablecimiento
    | de contraseñas basadas en los tipos específicos de usuarios.
    |
    | El tiempo de expiración es el número de minutos que cada token de
    | restablecimiento será considerado válido. Esta característica de
    | seguridad mantiene los tokens de corta duración para que tengan menos
    | tiempo de ser adivinados. Puedes cambiar este valor según sea necesario.
    |
    | La configuración de throttle es el número de segundos que un usuario
    | debe esperar antes de generar más tokens de restablecimiento de
    | contraseñas. Esto previene que un usuario genere una gran cantidad
    | de tokens de restablecimiento de contraseñas en poco tiempo.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Tiempo de Expiración de Confirmación de Contraseña
    |--------------------------------------------------------------------------
    |
    | Aquí puedes definir la cantidad de segundos antes de que una confirmación
    | de contraseña expire y el usuario sea solicitado a volver a ingresar su
    | contraseña en la pantalla de confirmación. Por defecto, el tiempo de
    | expiración es de tres horas.
    |
    */

    'password_timeout' => 10800,

];
