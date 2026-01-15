<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Stories') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=miriam-libre:400,700&family=quicksand:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white text-gray-900 font-sans antialiased">
        <div class="min-h-screen flex flex-col">
            <header class="border-b border-gray-200">
                <div class="w-full max-w-6xl mx-auto p-4 md:p-6 lg:p-8">
                    <a href="{{ url('/') }}" class="inline-flex items-center">
                        <span class="sr-only">Stories</span>
                        <img src="{{ asset('logo.png') }}" alt="" class="h-6 w-auto">
                    </a>
                </div>
            </header>

            <main class="flex-1 w-full max-w-6xl mx-auto p-4 md:p-6 lg:p-8">
                @yield('content')
            </main>

            <footer class="border-t border-gray-200">
                <div class="w-full max-w-6xl mx-auto p-4 md:p-6 lg:p-8">
                    <a href="{{ url('/') }}" class="inline-flex items-center">
                        <span class="sr-only">Stories</span>
                        <img src="{{ asset('logo.png') }}" alt="" class="h-6 w-auto">
                    </a>
                </div>
            </footer>
        </div>
    </body>
</html>
