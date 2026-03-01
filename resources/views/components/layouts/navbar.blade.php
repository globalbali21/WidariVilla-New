<header class="bg-white shadow-md px-6 py-4 flex justify-between items-center">
    <!-- Logo / Brand -->
    <div class="flex-shrink-0">
        <a href="/">
            <img src="/images/logo/Widarivilla.png" alt="Widari Villa Logo" class="h-12 w-auto">
        </a>
    </div>

    <!-- Menu Desktop -->
    <nav class="space-x-6 hidden md:flex items-center">
        <a href="#" class="text-gray-600 hover:text-blue-500">Widari Villa 1</a>
        <a href="#" class="text-gray-600 hover:text-blue-500">Widari Villa 2</a>
        <a href="#" class="text-gray-600 hover:text-blue-500">Widari Villa 3</a>
        <a href="#" class="text-gray-600 hover:text-blue-500">Widari Villa 4</a>
        <a href="#" class="text-gray-600 hover:text-blue-500">Service</a>
        <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">Contact Us</a>
    </nav>

    <!-- Mobile menu button -->
    <div class="md:hidden">
        <button id="mobile-menu-button" class="text-gray-600 hover:text-blue-500">☰</button>
    </div>
</header>

<!-- Script toggle menu mobile -->
<script>
    const btn = document.getElementById('mobile-menu-button');
    if(btn){
        btn.addEventListener('click', () => {
            const nav = document.querySelector('nav');
            nav.classList.toggle('hidden');
        });
    }
</script>