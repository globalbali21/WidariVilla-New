<main>
    <x-layouts.navbar1/>
    <main>
        <section class="relative h-screen w-full">
            <div class="absolute inset-0">
                <img src="{{ asset('images/widari1/1.jpg') }}" class="w-full h-full object-cover" alt="Widari Villa">
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
                    What The Villa Widari 1
                </h2>
                <p class="max-w-4xl mx-auto text-xl leading-relaxed text-gray-800 mb-16">
                    Widari Villas is one of the most beautiful villas in Ubud, featuring a unique design inspired by traditional wooden Joglo architecture. We have been winning the hearts of our guests by providing exceptional service and a warm atmosphere.
                </p>
                <div class=" h-80 rounded-xl shadow-md overflow-hidden">
                    <img src="{{ asset('images/widari1/4.jpg') }}" 
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
                    Quality Your Time
                </h2>
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <img src="{{ asset('images/widari1/2.jpg') }}" alt="Widari Villa Pool" class="rounded-2xl shadow-lg w-full object-cover">
                    </div>
                    <div>        
                        <p class="text-gray-700 leading-relaxed text-lg">
                            Nestled in the heart of nature, our villa offers the perfect blend of comfort and serenity. 
                            With elegant design, warm hospitality, and breathtaking surroundings, every corner is crafted 
                            to create unforgettable experiences. Whether you seek relaxation by the pool, peaceful mornings 
                            with stunning views, or memorable gatherings with loved ones, this is where every moment 
                            becomes truly special.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white py-20">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2>
                            Serices and Experiences
                        </h2>
                        <p class="text-gray-700 leading-relaxed text-lg">

                        </p>
                    </div>
                    <div>
                        <img src="{{ asset('images/widari1/3.jpg') }}" alt="Widari Villa Pool" class="rounded-2xl shadow-lg w-full object-cover">
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-gray-100 py-24">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h2 class="text-2xl md:text-4xl font-bold font-bree mb-8">
                    Whats Villa Widari 1 Offers
                </h2>
                <p class="max-w-4xl mx-auto text-xl leading-relaxed text-gray-800 mb-10">
                    Widari Villas is one of the most beautiful villas in Ubud, featuring a unique design inspired by traditional wooden Joglo architecture. We have been winning the hearts of our guests by providing exceptional service and a warm atmosphere.
                </p>
                <div class="grid md:grid-cols-3 gap-10">
                    <div class="bg-gray-300 h-48 rounded-xl shadow-md"></div>
                    <div class="bg-gray-300 h-48 rounded-xl shadow-md"></div>
                    <div class="bg-gray-300 h-48 rounded-xl shadow-md"></div>
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
                        <img src="{{ asset('images/widari2/1.jpg') }}" class="w-full h-[300px] object-cover rounded-lg">
                        <div class="absolute bottom-4 bg-white px-8 py-3 shadow-lg font-bree">
                            <p class="font-bold">Widari Villa 2</p>
                            <p class="text-sm text-gray-600">Double Bed</p>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="{{ asset('images/widari3/1.jpg') }}" class="w-full h-[300px] object-cover rounded-lg">
                        <div class="absolute bottom-4 bg-white px-8 py-3 shadow-lg font-bree">
                            <p class="font-bold">Widari Villa 3</p>
                            <p class="text-sm text-gray-600">Twin Bed</p>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="{{ asset('images/widari4/1.jpg') }}" class="w-full h-[300px] object-cover rounded-lg">
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