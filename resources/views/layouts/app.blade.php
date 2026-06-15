<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-black antialiased">
    <nav class="bg-black text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-8">
                    <a href="{{ route('events.index') }}" class="font-bold text-lg tracking-tight hover:text-yellow-400 transition">Events</a>
                    <div class="flex space-x-6">
                        <a href="{{ route('events.index') }}" class="hover:text-yellow-400 transition">Home</a>
                        <a href="{{ route('about') }}" class="hover:text-yellow-400 transition">About</a>
                        <a href="{{ route('contact') }}" class="hover:text-yellow-400 transition">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @yield('content')
    </main>

    <footer class="bg-black text-white mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-sm text-gray-300">
                <div>
                    <h3 class="font-semibold text-white mb-1">Adres</h3>
                    <p>Quai de l'Industrie 170<br>1070 Anderlecht</p>
                </div>
                <div>
                    <h3 class="font-semibold text-white mb-1">Contact</h3>
                    <p>info@anderlechtse-ngo.be<br>+32 (0)2 520 00 00</p>
                </div>
                <div class="text-right sm:text-left">
                    <h3 class="font-semibold text-white mb-1">Anderlechtse NGO</h3>
                    <p>&copy; {{ date('Y') }} — Alle rechten voorbehouden</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>