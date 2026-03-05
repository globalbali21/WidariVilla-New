<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Widari Villa </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{-- Vite CSS & JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Livewire Styles --}}
    @livewireStyles
</head>
<body class="bg-gray-100 min-h-screen">
  <x-layouts.navbar/>
    {{ $slot ?? '' }}

    {{-- Livewire Scripts --}}
    @livewireScripts
</body>
</html>