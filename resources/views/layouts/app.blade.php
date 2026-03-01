<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Widari Villa</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="">
    <x-layouts.navbar />
    <main class="flex-1 overflow-auto p-6">
        {{ $slot }}
    </main>
    
    @livewireScripts
</body>
</html>