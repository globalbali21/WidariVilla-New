<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Widari Villa - Serene Strays for Soulful Journeys</title>
    <link rel="icon" type="image/png" href="{{ asset ('images/logo/webwidari.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-100 min-h-screen">
        {{ $slot ?? '' }}
    <x-layouts.footer/>
    @livewireScripts
</body>
</html>