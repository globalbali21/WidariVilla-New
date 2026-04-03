<style>
[x-cloak] { display: none !important; }
</style>

<header x-data="{ open: false }" class="bg-[#4B2E1F] text-white absolute top-0 left-0 w-full z-50">

<div class="max-w-7xl mx-auto flex items-center px-4 py-4">

    <!-- Logo -->
    <div>
        <a href="/">
            <p class="font-bold font-bree text-lg md:text-xl">
                Widari Villa 1
            </p>
        </a>
    </div>

    <!-- RIGHT SIDE -->
    <div class="flex items-center ml-auto">

        <!-- Desktop Menu -->
        <nav class="hidden md:flex space-x-10 text-sm font-bree">
            <a href="/widarivilla1" class="hover:text-gray-300 transition">Home</a>
            <a href="/widarivilla1/gallery" class="hover:text-gray-300 transition">Gallery</a>
        </nav>

        <!-- Contact Button -->
        <div class="hidden md:block ml-10 font-bree">
            <a href="/widarivilla1/contact" 
               class="bg-white font-semibold text-black px-6 py-2 rounded-md text-sm hover:bg-gray-200 transition">
                Contact Us
            </a>
        </div>

        <!-- Hamburger -->
        <button 
            @click="open = !open; document.body.classList.toggle('overflow-hidden', open)" 
            class="md:hidden text-white text-2xl ml-4">
            ☰
        </button>
    </div>

    <!-- MOBILE MENU -->
    <div x-show="open" 
         x-cloak
         x-transition.opacity
         class="fixed inset-0 z-50">

        <!-- Background Image (LOAD ONLY WHEN OPEN) -->
        <template x-if="open">
            <div class="absolute inset-0">
                <img src="/images/widari1/1.webp" 
                     class="w-full h-full object-cover"
                     loading="lazy">
            </div>
        </template>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/70 backdrop-blur-sm"></div>

        <!-- Content -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-white font-bree">

            <!-- Logo -->
            <img src="/images/logo/Widarivilla.png" class="h-20 mb-10">

            <!-- Menu -->
            <div class="flex flex-col items-center space-y-6 text-xl">
                <a href="/widarivilla1" @click="open=false">Home</a>
                <a href="/widarivilla1/gallery" @click="open=false">Gallery</a>
                <a href="/widarivilla1/contact"
                   class="mt-6 bg-white text-black px-6 py-3 rounded-md">
                    Contact Us
                </a>
            </div>

            <!-- Close Button -->
            <button 
                @click="open = false; document.body.classList.remove('overflow-hidden')" 
                class="absolute top-6 right-6 text-3xl">
                ✕
            </button>

        </div>
    </div>

</header>