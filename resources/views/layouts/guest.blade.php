<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title> @if (Route::currentRouteName() == 'login')
            Accedi
           @else
            Registrati
           @endif</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
          
    </head>

    @include('.layouts.master')

    <body class="font-sans bg-black">
        <div class="flex flex-col items-center justify-items-center mt-10">
            <h4 class="mb-4 text-4xl font-extrabold leading-none tracking-tigh md:text-3xl lg:text-5xl text-white pt-6">
                @if (Route::currentRouteName() == 'login')
                Accedi
               @else
                Registrati
               @endif
            </h4>
            <div class="w-full sm:max-w-md mt-3 px-6 py-4 bg-black border-2 border-slate-500 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
