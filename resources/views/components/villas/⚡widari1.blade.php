<main>
    <x-layouts.navbar1/>
    <main>
        <section x-data="heroSlider()" x-init="start()" class="relative h-screen w-full bg-[#5a3423]">
            <!-- Single Image (FAST) -->
            <img :src="images[current]"
                 class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700 "
                 loading="eager">
        
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/40"></div>
        
            <!-- Content -->
            <div class="relative z-10 flex items-center justify-center h-full text-center px-6"
                 x-data="{ show: false }"
                 x-init="setTimeout(() => show = true, 200)">
            
                <div class="text-white font-bree">
                    
                    <!-- Title -->
                    <h1 
                        x-show="show"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 translate-y-10"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        class="text-4xl md:text-6xl font-bold tracking-wide">
                        Widari Villa 1
                    </h1>
            
                    <!-- Subtitle -->
                    <p 
                        x-show="show"
                        x-transition:enter="transition ease-out duration-500 delay-300"
                        x-transition:enter-start="opacity-0 translate-y-10"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        class="text-lg md:text-xl font-light tracking-wide mt-2">
                        Serene Stays for Soulful Journeys
                    </p>
            
                </div>
                <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-20 text-white text-center">

                    <p class="text-sm tracking-widest mb-2 opacity-80">
                        SCROLL DOWN
                    </p>
                
                    <!-- garis animasi -->
                    <div class="w-[1px] h-10 bg-white/50 mx-auto overflow-hidden relative">
                        <div class="absolute top-0 left-0 w-full h-4 bg-white animate-scroll"></div>
                    </div>
                
                </div>
            </div>
        </section>
        <section class="bg-white py-24">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h2 class="text-3xl sm:text-5xl font-bold font-bree mb-10">
                    What The Widari Villa 1
                </h2>
                <p class="max-w-6xl mx-auto text-base sm:text-lg leading-relaxed text-gray-800 mb-10">
                    Discover refined comfort at Widari Villa 1, featuring a luxurious high-quality bed and a spacious layout thoughtfully designed for relaxation and style.
                    Ideally located just moments from the swimming pool and lounge area, the villa offers effortless access to a serene yet inviting atmosphere perfect for a refreshing swim or unwinding with your favorite drink.
                </p>
                <div class=" h-80 rounded-xl shadow-md overflow-hidden">
                    <img src="{{ asset('images/widari1/4.webp') }}" 
                         alt=""
                         class="w-full h-full object-cover">
                </div>
            </div>
        </section>
        <section class="bg-gray-100 py-20">
            <div class="max-w-6xl mx-auto px-6">
                <p class="text-gray-600 text-sm sm:text-lg tracking-wide text-center">
                    See More
                </p>
                <h2 class="text-2xl sm:text-5xl font-bree mb-8 font-bold text-center">
                    Quality Time at Widari Villa 1
                </h2>
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <img src="{{ asset('images/widari1/2.webp') }}" alt="Widari Villa Pool" class="rounded-2xl shadow-lg w-full object-cover">
                    </div>
                    <div>        
                        <p class="text-gray-700 leading-relaxed text-base sm:text-lg text-justify">
                            Spend meaningful moments at Widari Villa 1, where tranquility meets comfort. Whether enjoying a quiet morning by the pool or unwinding in a peaceful setting, every moment is designed to help you relax and reconnect.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white py-20">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl sm:text-5xl font-bree mb-8 font-bold text-center">
                            Experiences & Services
                        </h2>
                    
                        <div class="space-y-4 text-gray-700 text-lg">
                        
                            <!-- Experiences -->
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-[#5b2d1a]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M12 6v6l4 2"/>
                                </svg>
                                <p>Experiences</p>
                            </div>
                        
                            <!-- Shuttle -->
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-[#5b2d1a]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M3 13h18M5 13l2-5h10l2 5"/>
                                </svg>
                                <p>Free Shuttle Service</p>
                            </div>
                        
                            <!-- Kitchen -->
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-[#5b2d1a]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M4 3h16v18H4z"/>
                                </svg>
                                <p>Private Kitchen</p>
                            </div>
                        
                            <!-- Laundry -->
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-[#5b2d1a]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="3"/>
                                    <path d="M4 4h16v16H4z"/>
                                </svg>
                                <p>Laundry Service</p>
                            </div>
                        
                            <!-- Pool -->
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-[#5b2d1a]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M2 18c2-2 4-2 6 0s4 2 6 0 4-2 6 0"/>
                                </svg>
                                <p>Swimming Pool Access</p>
                            </div>
                        
                            <!-- Water Heater -->
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-[#5b2d1a]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M12 3v18M8 7c0-2 4-2 4 0s4 2 4 0"/>
                                </svg>
                                <p>Water Heater</p>
                            </div>
                        
                            <!-- Mini Bar -->
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-[#5b2d1a]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M8 2h8v4H8zM6 6h12v14H6z"/>
                                </svg>
                                <p>In-Room Mini Bar</p>
                            </div>
                        
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('images/widari1/3.webp') }}" alt="Widari Villa Pool" class="rounded-2xl shadow-lg w-full object-cover">
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-gray-100 py-24">
            <div class="max-w-6xl mx-auto px-6 text-center">
                
                <!-- Title -->
                <h2 class="text-2xl sm:text-5xl font-bold font-bree mb-6">
                    What Widari Villa 1 Offers
                </h2>
        
                <!-- Description -->
                <p class="max-w-6xl mx-auto text-base sm:text-lg leading-relaxed text-gray-700 mb-12">
                    Experience the charm of Widari Villa 1, inspired by traditional Baliness architecture and surrounded by a warm, peaceful atmosphere. Thoughtfully designed to provide comfort and relaxation, every detail is crafted to make your stay truly memorable.
                </p>
        
                <!-- Features -->
                <div class="grid md:grid-cols-5 gap-8 text-center">
        
                    <!-- Free Wifi -->
                    <div class="bg-white h-48 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center justify-center space-y-3 hover:scale-105 hover:shadow-lg transition">
                        <i class="fa-solid fa-wifi text-3xl text-[#5b2d1a]"></i>
                        <p class="font-medium">Free WiFi</p>
                    </div>
        
                    <!-- Traditional Room -->
                    <div class="bg-white h-48 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center justify-center space-y-3 hover:scale-105 hover:shadow-lg transition">
                        <i class="fa-solid fa-house text-3xl text-[#5b2d1a]"></i>
                        <p class="font-medium">Traditional Baliness Style</p>
                    </div>
                    
                    <!-- Mini Kitchen -->
                    <div class="bg-white h-48 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center justify-center space-y-3 hover:scale-105 hover:shadow-lg transition">
                        <i class="fa-solid fa-fire-burner text-3xl text-[#5b2d1a]"></i>
                        <p class="font-medium">Mini Kitchen</p>
                    </div>
        
                    <!-- Double Bed -->
                    <div class="bg-white h-48 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center justify-center space-y-3 hover:scale-105 hover:shadow-lg transition">
                        <i class="fa-solid fa-bed text-3xl text-[#5b2d1a]"></i>
                        <p class="font-medium">Comfortable Double Bed</p>
                    </div>
        
                    <!-- Cleaning -->
                    <div class="bg-white h-48 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center justify-center space-y-3 hover:scale-105 hover:shadow-lg transition">
                        <i class="fa-solid fa-broom text-3xl text-[#5b2d1a]"></i>
                        <p class="font-medium">Daily Room Cleaning</p>
                    </div>
        
                </div>
            </div>
        </section>
        <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-center text-3xl sm:text-5xl font-bold font-bree mb-8">
                    Gallery
                </h2>
        
                <div class="swiper myGallery rounded-xl overflow-hidden">
                    <div class="swiper-wrapper">
        
                        @php
                            $images = File::files(public_path('images/widari1'));
                        @endphp
        
                        @foreach ($images as $image)
                            <div class="swiper-slide">
                                <img src="{{ asset('images/widari1/' . $image->getFilename()) }}" 
                                     class="w-full h-[480px] object-cover">
                            </div>
                        @endforeach
        
                    </div>
        
                    <div class="swiper-button-next text-white"></div>
                    <div class="swiper-button-prev text-white"></div>
                </div>
            </div>
        </section>
        <section class="py-16 bg-gray-100">
            <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
                <div class="w-full h-[400px] rounded-lg overflow-hidden">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.877480280237!2d115.24328457501291!3d-8.511275291530836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23d001c696b0b%3A0x92a4b30a6b8f2733!2sWidari%20Villa!5e0!3m2!1sid!2sid!4v1772978206018!5m2!1sid!2sid" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
                <div>
                    <h2 class="sm:text-5xl text-4xl font-bree font-bold">
                        Our Location
                    </h2>
                    <p class="sm:text-lg text-base font-semibold mb-10">
                        Discover the beauty of Ubud, Bali with us
                    </p>
                    <p class="text-gray-700 leading-relaxed sm:text-lg text-base text-justify">
                        Widari Villas is a tranquil retreat nestled in the heart of Ubud, designed with the elegance of traditional Baliness architecture. Surrounded by Ubud's signature rice paddy views, we offer the perfect blend of comfort, culture, and tranquility. Experience warm hospitality and unforgettable moments in a setting where every detail is designed for your relaxation.
                    </p>
                </div>
            </div>
        </section>
        <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-center text-3xl sm:text-5xl font-bold font-bree mb-10">
                  In The Area Villa
                </h2>
                <div class="bg-[#4B2E1F] rounded-lg p-8 text-white leading-relaxed text-base sm:text-lg">
                    <p class="mb-3">
                        <i class="fa-solid fa-plane-departure mr-2"></i>
                        This villa is located approximately 1 hour from Denpasar Airport.
                    </p>

                    <p class="mb-3">
                        <i class="fa-solid fa-van-shuttle mr-2"></i>
                        We provide shuttle service for guests staying at our villa.
                    </p>
                    
                    <p class="mb-3">
                        <i class="fa-solid fa-taxi mr-2"></i>
                        In addition, Gojek and Grab ride-hailing apps are very useful for affordable scooter and taxi services.
                    </p>
                    
                    <p class="mb-3">
                        <i class="fa-solid fa-tree mr-2"></i>
                        Surrounded by a peaceful village atmosphere with beautiful rice field views, perfect for a relaxing stay away from the crowds.
                    </p>
                    
                    <p class="mb-3">
                        <i class="fa-solid fa-person-walking mr-2"></i>
                        Close to jogging and tracking routes where you can enjoy fresh air and natural scenery.
                    </p>
                    
                    <p class="mb-3">
                        <i class="fa-solid fa-otter mr-2"></i>
                        Near the famous Monkey Forest, one of Bali’s most iconic natural attractions.
                    </p>
                    
                    <p class="mb-3">
                        <i class="fa-solid fa-water mr-2"></i>
                        Easy access to popular adventure activities such as rafting, tubing, and nature tracking experiences.
                    </p>
                    
                    <p>
                        <i class="fa-solid fa-wind mr-2"></i>
                        Enjoy cool fresh air, complete privacy, and a calm environment designed for a truly relaxing escape.
                    </p>
                </div>
            </div>
        </section>
        <section class="relative py-16">
            <div class="absolute inset-0">
                <img src="/images/widari1/6.webp" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/50"></div>
            </div>
            <div class="relative max-w-5xl mx-auto px-6">
                <div class="bg-[#4B2E1F]/40 backdrop-blur-md p-10 rounded-lg text-white shadow-xl">
                    <h2 class="text-center sm:text-5xl text-2xl font-bold mb-10">
                        Booking Villas
                    </h2>
                    <form wire:submit.prevent="submit" class="space-y-6">
                        <div>
                            <label class="block mb-2">Name</label>
                            <input type="text" wire:model="name"
                                class="w-full text-black rounded-md px-4 py-3 bg-white/90">
                        </div>
                        <div>
                            <label class="block mb-2">Email</label>
                            <input type="email" wire:model="email"
                                class="w-full text-black rounded-md px-4 py-3 bg-white/90">
                        </div>
                        <div>
                            <label class="block mb-2">Phone</label>
                            <div class="flex">
                                <span class="bg-gray-200 px-4 flex items-center text-black rounded-l-md">
                                    +
                                </span>
                                <input type="text"
                                    wire:model="phone"
                                    placeholder="628123456789"
                                    class="w-full text-black rounded-r-md px-4 py-3 bg-white/90">
                            </div>
                            <small class="text-white/70">
                                Use country code (Example: 628..., 1555..., 447...)
                            </small>
                        </div>
                        <div>
                            <label class="block mb-2">Check In Date</label>
                            <input type="date" wire:model="check_in"
                                class="w-full text-black rounded-md px-4 py-3 bg-white/90">
                        </div>
                        <button type="submit" class="bg-white text-black px-8 py-3 font-semibold rounded-md">
                            <span wire:loading.remove>Submit</span>
                            <span wire:loading>Sending...</span>
                        </button>
                        @if (session()->has('success'))
                            <div class="bg-green-500/20 p-3 rounded">
                                {{ session('success') }}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </section>
        <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-6">    
                <h2 class="text-center text-2xl sm:text-4xl font-bold mb-10 font-bree">
                    Other Villas
                </h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <a href="/widarivilla2">
                        <div class="relative">
                            <img src="{{ asset('images/widari2/1.webp') }}" class="w-full h-[300px] object-cover rounded-lg">
                            <div class="absolute bottom-4 bg-white px-8 py-3 shadow-lg font-bree">
                                <p class="font-bold">Widari Villa 2</p>
                                <p class="text-sm text-gray-600">Double Bed</p>
                            </div>
                        </div>
                    </a>
                    <a href="/widarivilla3">
                        <div class="relative">
                            <img src="{{ asset('images/widari3/1.webp') }}" class="w-full h-[300px] object-cover rounded-lg">
                            <div class="absolute bottom-4 bg-white px-8 py-3 shadow-lg font-bree">
                                <p class="font-bold">Widari Villa 3</p>
                                <p class="text-sm text-gray-600">Twin Bed</p>
                            </div>
                        </div>
                    </a>
                    <a href="/widarivilla4">
                        <div class="relative">
                            <img src="{{ asset('images/widari4/1.webp') }}" class="w-full h-[300px] object-cover rounded-lg">
                            <div class="absolute bottom-4 bg-white px-8 py-3 shadow-lg font-bree">
                                <p class="font-bold">Widari Villa 4</p>
                                <p class="text-sm text-gray-600">Double Bed</p>
                            </div>
                        </div>
                    </a>
                </div>    
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".myGallery", {
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
    function heroSlider() {
        return {
            current: 0,
            images: [
                '/images/widari1/4.webp',
                '/images/widari1/6.webp',
                '/images/widari1/7.webp',
                '/images/widari1/1.webp',
                '/images/widari1/3.webp',
                '/images/widari1/9.webp',
            ],
            start() {
                setInterval(() => {
                    this.current = (this.current + 1) % this.images.length;
                }, 3000); 
            }
        }
    }
    </script>
</main>