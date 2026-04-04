<style>
.goog-te-banner-frame.skiptranslate {
    display: none !important;
}
body {
    top: 0 !important;
}
.goog-te-combo {
    display: none !important;
}
.goog-logo-link {
    display: none !important;
}
.goog-te-gadget {
    height: 0;
    overflow: hidden;
}
</style>
<header x-data="{ open: false }" class="absolute top-0 left-0 w-full z-50">
    
    <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-5">

        <!-- Logo -->
        <div class="flex-shrink-0">
            <a href="/">
                <img src="/images/logo/Widarivilla.png" 
                     alt="Widari Villa Logo" 
                     class="h-14 md:h-16 w-auto">
            </a>
        </div>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex space-x-2 sm:space-x-8 text-white text-sm items-center font-bree">
            <a href="/widarivilla1" class="hover:text-gray-300 transition">Widari villa 1</a>
            <a href="/widarivilla2" class="hover:text-gray-300 transition">Widari villa 2</a>
            <a href="/widarivilla3" class="hover:text-gray-300 transition">Widari villa 3</a>
            <a href="/widarivilla4" class="hover:text-gray-300 transition">Widari villa 4</a>
            <a href="/Services" class="hover:text-gray-300 transition">Service</a>
        </nav>
        <div class="hidden md:flex items-center space-x-4 font-bree">
        
            <!-- Translate -->
            <div class="flex space-x-2">
            
                <!-- EN -->
                <button onclick="translateTo('en')" 
                    class="flex items-center space-x-2 px-3 py-1.5 bg-white/80 backdrop-blur rounded-full text-xs font-semibold hover:bg-[#5b2d1a] hover:text-white transition">
            
                    <img src="https://flagcdn.com/w20/gb.png" class="w-4 h-4 rounded-full">
                    <span>EN</span>
            
                </button>
            
                <!-- ID -->
                <button onclick="translateTo('id')" 
                    class="flex items-center space-x-2 px-3 py-1.5 bg-white/80 backdrop-blur rounded-full text-xs font-semibold hover:bg-[#5b2d1a] hover:text-white transition">
            
                    <img src="https://flagcdn.com/w20/id.png" class="w-4 h-4 rounded-full">
                    <span>ID</span>
            
                </button>
            
            </div>
        
            <!-- Contact -->
            <a href="/ContactUs" 
               class="bg-white text-black px-6 py-3 rounded-md text-sm font-medium hover:bg-gray-200 transition">
                Contact Us
            </a>
        
        </div>

        <!-- Hamburger Button -->
        <button 
            @click="open = !open; document.body.classList.toggle('overflow-hidden', open)" 
            class="md:hidden text-white text-2xl">
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
                <img src="/images/hero-WidariVilla.webp" 
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
                <a href="/" @click="open=false">Home</a>
                <a href="/widarivilla1" @click="open=false">Widari Villa 1</a>
                <a href="/widarivilla2" @click="open=false">Widari Villa 2</a>
                <a href="/widarivilla3" @click="open=false">Widari Villa 3</a>
                <a href="/widarivilla4" @click="open=false">Widari Villa 4</a>
                <a href="/Services" @click="open=false">Service</a>

                <a href="/ContactUs"
                   class="mt-6 bg-white text-black px-6 py-3 rounded-md">
                    Contact Us
                </a>
            </div>
            <div class="flex space-x-3 mt-6">
                <!-- EN -->
                <button onclick="translateTo('en')" 
                    class="flex items-center space-x-2 px-3 py-1.5 bg-white/80 backdrop-blur rounded-full text-xs font-semibold hover:bg-[#5b2d1a] hover:text-white transition">
            
                    <img src="https://flagcdn.com/w20/gb.png" class="w-4 h-4 rounded-full">
                    <span>EN</span>
            
                </button>
            
                <!-- ID -->
                <button onclick="translateTo('id')" 
                    class="flex items-center space-x-2 px-3 py-1.5 bg-white/80 backdrop-blur rounded-full text-xs font-semibold hover:bg-[#5b2d1a] hover:text-white transition">
            
                    <img src="https://flagcdn.com/w20/id.png" class="w-4 h-4 rounded-full">
                    <span>ID</span>
            
                </button>
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
<script>
function translateTo(lang) {
    if (lang === 'en') {
        // RESET TRANSLATE (balik ke original)
        document.cookie = "googtrans=/auto/en;path=/";
        location.reload();
    } else {
        // SET ke bahasa lain
        document.cookie = "googtrans=/auto/" + lang + ";path=/";
        location.reload();
    }
}
</script>