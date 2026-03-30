<main>
    <x-layouts.navbar1/>
    <main>
        <section class="relative h-screen w-full">
            <div class="absolute inset-0">
                <img src="{{ asset('images/widari1/1.webp') }}" class="w-full h-full object-cover" alt="Widari Villa">
            </div>
            <div class="absolute inset-0 bg-black/50"></div>
            <div class="relative z-10 flex items-center justify-center h-full text-center px-2">
                <div class="text-white font-bree">
                    <h1 class="text-xl md:text-6xl font-bold tracking-wide">
                        Widari Villa 1
                    </h1>
                    <p class="mt-0 text-lg md:text-xl font-light tracking-wide mb-4">
                        Serene Strays for Soulful Journeys
                    </p>
                    <a href="" class="mt-14 bg-white text-black px-8 py-2 font-semibold shadow hover:bg-gray-200 transition rounded-md">
                        Book Now
                    </a>
                </div>
            </div>
        </section>
        <section class="bg-white py-24">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h2 class="text-2xl md:text-4xl font-bold font-bree mb-10">
                    What The Villa
                </h2>
                <p class="max-w-6xl mx-auto text-xl leading-relaxed text-gray-800 mb-10">
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
                <p class="text-gray-600 text-lg tracking-wide text-center">
                    See More
                </p>
                <h2 class="text-2xl md:text-4xl font-bree mb-8 font-bold text-center">
                    Quality Time at Widari Villa 1
                </h2>
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <img src="{{ asset('images/widari1/2.webp') }}" alt="Widari Villa Pool" class="rounded-2xl shadow-lg w-full object-cover">
                    </div>
                    <div>        
                        <p class="text-gray-700 leading-relaxed text-lg">
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
                        <h2 class="text-2xl md:text-4xl font-bree mb-8 font-bold text-center">
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
                                <p>Kitchen Access</p>
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
                <h2 class="text-2xl md:text-4xl font-bold font-bree mb-6">
                    What Widari Villa 1 Offers
                </h2>
        
                <!-- Description -->
                <p class="max-w-3xl mx-auto text-lg leading-relaxed text-gray-700 mb-12">
                    Experience the charm of Widari Villa 1, inspired by traditional Joglo wooden architecture and surrounded by a warm, peaceful atmosphere. Thoughtfully designed to provide comfort and relaxation, every detail is crafted to make your stay truly memorable.
                </p>
        
                <!-- Features -->
                <div class="grid md:grid-cols-4 gap-8 text-center">
        
                    <!-- Free Wifi -->
                    <div class="bg-white h-48 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center justify-center space-y-3 hover:scale-105 hover:shadow-lg transition">
                        <i class="fa-solid fa-wifi text-3xl text-[#5b2d1a]"></i>
                        <p class="font-medium">Free WiFi</p>
                    </div>
        
                    <!-- Traditional Room -->
                    <div class="bg-white h-48 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center justify-center space-y-3 hover:scale-105 hover:shadow-lg transition">
                        <i class="fa-solid fa-house text-3xl text-[#5b2d1a]"></i>
                        <p class="font-medium">Traditional Joglo Style</p>
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
                <h2 class="text-center text-4xl font-bold font-bree mb-8">
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
                        style="border:0; filter: invert(90%) hue-rotate(180deg);"
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
                <div>
                    <h2 class="text-4xl font-bold font-bree mb-1">
                        Our Location
                    </h2>
                    <p class="text-lg font-semibold mb-8">
                        Discovery ubud in bali with us
                    </p>
                    <p class="text-gray-800 leading-relaxed">
                        Widari Villas is one of the most beautiful villas in Ubud, featuring a unique 
                        design inspired by traditional wooden Joglo architecture. We have been 
                        winning the hearts of our guests by providing exceptional service and a 
                        warm atmosphere.
                    </p>
                </div>
            </div>
        </section>
        <section class="py-16 bg-white">
            <div class="max-w-5xl mx-auto px-6">
                <h2 class="text-center text-2xl font-bold font-bree mb-10">
                  In The Area Villa
                </h2>
                <div class="bg-[#4B2E1F] rounded-lg p-8 text-white leading-relaxed">
                    <p class="mb-3">
                        ✈️ This villa is located approximately 45 minutes from the Denpasar Airport.
                    </p>
                    <p class="mb-3">
                        🚗 We can organise transportation from the airport or anywhere else on the island.
                    </p>
                    <p class="mb-3">
                        🏖️ It is common for people to rent scooters in Bingin and we can also organise this for you.
                    </p>
                    <p>
                        🚕 In addition, Gojek and Grab ride-hailing apps are very useful for getting inexpensive scooters and car taxis.
                    </p>
                </div>
            </div>
        </section>
        <section class="py-16 bg-gray-100">
            <div class="max-w-5xl mx-auto px-6">
                <div class="bg-[#4B2E1F] p-10 rounded-lg text-white">
                    <h2 class="text-center text-4xl font-bold font-bree mb-10">
                        Booking Villas
                    </h2>
                    <form class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium mb-2">Name</label>
                            <input type="text" class="w-full text-black rounded-md px-4 py-3 border bg-white shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Email</label>
                            <input type="email" class="w-full text-black rounded-md px-4 py-3 border bg-white shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Phone</label>
                            <input type="text" class="w-full text-black rounded-md px-4 py-3 border bg-white shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Check In Date</label>
                            <input type="date" class="w-full rounded-md text-black px-4 py-3 border bg-white shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
                        </div>
                        <div>
                            <button class="bg-white text-black px-8 py-3 font-semibold text-lg hover:bg-gray-200 transition rounded-md">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-6">    
                <h2 class="text-center text-2xl font-semibold mb-10">
                    Other Villa
                </h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="relative">
                        <img src="{{ asset('images/widari2/1.webp') }}" class="w-full h-[300px] object-cover rounded-lg">
                        <div class="absolute bottom-4 bg-white px-8 py-3 shadow-lg font-bree">
                            <p class="font-bold">Widari Villa 2</p>
                            <p class="text-sm text-gray-600">Double Bed</p>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="{{ asset('images/widari3/1.webp') }}" class="w-full h-[300px] object-cover rounded-lg">
                        <div class="absolute bottom-4 bg-white px-8 py-3 shadow-lg font-bree">
                            <p class="font-bold">Widari Villa 3</p>
                            <p class="text-sm text-gray-600">Twin Bed</p>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="{{ asset('images/widari4/1.webp') }}" class="w-full h-[300px] object-cover rounded-lg">
                        <div class="absolute bottom-4 bg-white px-8 py-3 shadow-lg font-bree">
                            <p class="font-bold">Widari Villa 4</p>
                            <p class="text-sm text-gray-600">Double Bed</p>
                        </div>
                    </div>
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
</main>