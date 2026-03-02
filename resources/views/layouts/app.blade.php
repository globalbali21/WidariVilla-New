<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Widari Villa </title>

    {{-- Vite CSS & JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Livewire Styles --}}
    @livewireStyles
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-gray-800">
                {{ config('app.name') }}
            </h1>

            <div class="space-x-4">
                <a href="/" class="text-gray-600 hover:text-blue-500">Home</a>
                <a href="#" class="text-gray-600 hover:text-blue-500">About</a>
                <a href="#" class="text-gray-600 hover:text-blue-500">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="py-8">
        <div class="max-w-7xl mx-auto px-6">
            {{ $slot ?? '' }}
            @yield('content')
        </div>
    </main>

    {{-- Livewire Scripts --}}
    @livewireScripts
</body>
</html>