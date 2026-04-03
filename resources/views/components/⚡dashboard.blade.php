<style>
.swiper-slide {
    transform: scale(0.9);
    transition: all 0.5s ease;
}

/* image overlay gelap */
.overlay {
    background: rgba(0,0,0,0.6);
}

/* content hidden */
.content {
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.5s ease;
}

/* ACTIVE SLIDE */
.swiper-slide-active {
    transform: scale(1);
}

/* overlay lebih terang */
.swiper-slide-active .overlay {
    background: rgba(0,0,0,0.2);
}

/* tampilkan deskripsi */
.swiper-slide-active .content {
    opacity: 1;
    transform: translateY(0);
}
</style>
<main>
    <x-layouts.navbar/>
    <main class="overflow-hidden">
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
                        Widari Villa
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
        <section class="py-20 bg-gray-100">
            <div class="text-center sm:mb-12 mb-6">
                <h2 class="text-4xl md:text-5xl font-bold font-bree">
                    Browser Our Villas
                </h2>
                <h3 class="text-lg md:text-xl font-bree text-gray-600 p-2 sm:p-0">
                    Each space is designed to provide a peaceful retreat and an unforgettable stay in the heart of nature.
                </h3>
            </div>
        
            <div class="swiper mySwiper py-10 px-4">
                <div class="swiper-wrapper">
        
                    <!-- Slide -->
                    @foreach (['widari1','widari2','widari3','widari4'] as $i => $villa)
                    <div class="swiper-slide p-2">
                        <div class="relative rounded-2xl overflow-hidden">
        
                            <img src="{{ asset('images/'.$villa.'/1.webp') }}"
                                class="w-full h-[400px] sm:h-[350px] md:h-[500px] object-cover transition-all duration-500">
        
                            <!-- overlay -->
                            <div class="overlay absolute inset-0 transition-all duration-500"></div>
        
                            <!-- content -->
                            <div class="content absolute bottom-4 left-4 md:bottom-10 md:left-0 
                                        text-black bg-white 
                                        px-4 py-3 md:px-10 md:py-6 
                                        max-w-[90%] md:max-w-md 
                                        rounded-lg md:rounded-none">
        
                                <h3 class="text-3xl font-bold font-bree">
                                    Widari Villa {{ $i + 1 }}
                                </h3>
                                <p class="text-sm opacity-80">
                                    {{ $i == 2 ? 'Twin Bed' : 'Double Bed' }}
                                </p>
                            </div>
        
                        </div>
                    </div>
                    @endforeach
        
                </div>
        
                <!-- navigation -->
                <div class="swiper-button-next hidden md:block"></div>
                <div class="swiper-button-prev hidden md:block"></div>
        
                <!-- pagination -->
                <div class="swiper-pagination mt-6"></div>
            </div>
        </section>
        <section class="bg-[#f4f4f4] py-20">
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-4xl md:text-5xl font-bree font-bold text-center">
                    About Widari Villa
                </h2>
                <h3 class="text-lg md:text-2xl font-bree mb-10 text-center text-gray-600">
                    A beautiful place to enjoy every moment.
                </h3>
                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div>
                        <img src="{{ asset('images/hero2.webp')}}" alt="front widari villa" class="rounded-xl shadow-xl w-full h-[160%] object-cover">
                    </div>
                    <div>
                        <p class="text-gray-700 leading-relaxed text-base sm:text-lg text-justify">
                            Surrounded by the beauty of verdant rice paddies and a peaceful rural setting, Widari Villa offers a stay that combines warmth, comfort, and the best service.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base sm:text-lg text-justify mt-1">
                            Echoing the architecture of an ancient Javanese house with quality wood materials and touches of Ubud's tropical charm, every detail is designed to create an authentic and relaxing atmosphere.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-base sm:text-lg text-justify mt-1">
                            Amenities such as a swimming pool, kitchen, and a variety of exclusive services are here to ensure every guest feels at home. Experience the serenity of a refreshing Ubud morning and create unforgettable moments with loved ones because at Widari Villa, every visit is a special experience.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white py-18">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <p class="text-gray-600 sm:text-lg text-sm tracking-wide">
                    Make it Easy
                </p>
                <h2 class="text-4xl sm:text-5xl font-bold md:text-6xl font-bree mb-10">
                    Service
                </h2>
                <p class="max-w-6xl mx-auto sm:text-lg text-base  leading-relaxed text-gray-800 mb-16">
                    We offer a wide range of services to make your stay even more comfortable and enjoyable. From comprehensive amenities to helpful customer service, we have everything to ensure you truly enjoy your time at Widari Villa, making you feel right at home.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-10 text-center">
                    <div class="group flex flex-col items-center space-y-4 transition duration-300 hover:scale-105">
                        <div class="w-20 h-20 rounded-full bg-[#3b2c6f] flex items-center justify-center group-hover:opacity-80">
                            <div class="w-10 h-10 border-4 border-white rounded-sm"></div>
                        </div>
                        <p class="tracking-widest text-xs font-semibold text-gray-700">EXPERIENCES</p>
                    </div>
                    <div class="group flex flex-col items-center space-y-4 hover:scale-105 transition">
                        <div class="w-20 h-20 rounded-full bg-[#f4a261] flex items-center justify-center">
                            <div class="w-8 h-8 border-4 border-white rounded-full"></div>
                        </div>
                        <p class="tracking-widest text-xs font-semibold text-gray-700">HONEYMOON SETUP</p>
                    </div>
                    <div class="group flex flex-col items-center space-y-4 hover:scale-105 transition">
                        <div class="w-20 h-20 rounded-full bg-[#d94a8c] flex items-center justify-center">
                            <div class="grid grid-cols-2 gap-1">
                                <div class="w-3 h-3 bg-white rounded-full"></div>
                                <div class="w-3 h-3 bg-white rounded-full"></div>
                                <div class="w-3 h-3 bg-white rounded-full"></div>
                                <div class="w-3 h-3 bg-white rounded-full"></div>
                            </div>
                        </div>
                        <p class="tracking-widest text-xs font-semibold text-gray-700">TRAVEL GUIDE</p>
                    </div>
                    <div class="group flex flex-col items-center space-y-4 hover:scale-105 transition">
                        <div class="w-20 h-20 rounded-full bg-[#2a9d8f] flex items-center justify-center">
                            <div class="w-10 h-4 bg-white rounded-full"></div>
                        </div>
                        <p class="tracking-widest text-xs font-semibold text-gray-700">KITCHEN</p>
                    </div>
                    <div class="group flex flex-col items-center space-y-4 hover:scale-105 transition">
                        <div class="w-20 h-20 rounded-full bg-[#457b9d] flex items-center justify-center">
                            <div class="w-6 h-6 bg-white rounded-full"></div>
                        </div>
                        <p class="tracking-widest text-xs font-semibold text-gray-700">LAUNDRY</p>
                    </div>
                    <div class="group flex flex-col items-center space-y-4 hover:scale-105 transition">
                        <div class="w-20 h-20 rounded-full bg-[#2b9348] flex items-center justify-center">
                            <div class="w-6 h-6 border-4 border-white rounded-full"></div>
                        </div>
                        <p class="tracking-widest text-xs font-semibold text-gray-700">FREE SHUTTLE</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="max-w-6xl mx-auto py-20 px-6">
            <div class="text-center mb-16">
                <p class="text-gray-500 text-sm sm:text-lg">
                    More Than a Stay, It’s a Memory
                </p>
                <h2 class="text-4xl md:text-5xl font-bold font-bree">
                    Top Best Our Villas
                </h2>
            </div>
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="relative w-full max-w-sm sm:max-w-md md:max-w-lg lg:max-w-xl mx-auto">
                    <div class="absolute 
                                -bottom-4 -right-4 
                                sm:-bottom-6 sm:-right-6 
                                md:-bottom-8 md:-right-8 
                                w-full h-full 
                                bg-[#5a3423] 
                                rounded-2xl md:rounded-3xl">
                    </div>
                    <img src="{{ asset('images/widari1/1.webp')}}" 
                         alt="Villa Room"
                         class="relative rounded-2xl md:rounded-3xl shadow-lg object-cover w-full h-[250px] sm:h-[300px] md:h-[400px] lg:h-[450px]">
                </div>
                <div>
                    <h3 class="sm:text-3xl text-2xl font-semibold mb-6 font-bree">
                        Widari Villa 1
                    </h3>
                    <p class="text-gray-700 leading-relaxed sm:text-lg text-base text-justify mb-8">
                        More than just a place to stay, Widari Villa 1 offers direct access to the swimming pool and is conveniently located near the kitchen, ensuring comfort and ease throughout your stay. Thoughtfully designed with complete facilities, every detail is crafted to make you feel at home.
                    </p>
                    <a href="/widarivilla1" class="text-lg font-medium underline hover:text-[#5a3423] transition">
                        Explore Villa →
                    </a>
                </div>
            </div>
        </section>
        <section class="max-w-6xl mx-auto px-6 py-20 text-center">
            <p class="text-gray-600 sm:text-lg text-sm">
                Discover More
            </p>
            <h2 class="sm:text-5xl text-4xl font-bold mb-8 font-bree">
                Ubud Experience
            </h2>
            <div class="max-w-6xl mx-auto text-base sm:text-lg leading-relaxed text-gray-800 space-y-4 mb-8">
                <p>
                    Wake up to the soothing sounds of nature, breathe in the fresh tropical air, and unwind in your own private sanctuary.
                </p>
                <p>
                    Located in the cultural heart of Bali, our villa blends authentic Balinese charm with modern comfort, creating moments you’ll never forget.
                </p>
            </div>
            <div class="overflow-hidden rounded-3xl shadow-lg">
                <img src="{{asset('images/ubud.webp')}}" alt="Ubud Rice Field" class="w-full h-[400px] object-cover"/>
            </div>
            <a href="https://wa.me/6281215986658" class="mt-12 inline-block px-6 py-3 bg-[#4B2E1F] text-white text-lg font-semibold rounded-lg hover:bg-[#43281a] transition">
                Consultation For Guide Ubud
            </a>
        </section>
        <section class="bg-white py-16">
            <div class="max-w-6xl mx-auto text-center">
                <p class="sm:text-lg text-sm text-gray-600">
                    Follow Us
                </p>
                <h2 class="sm:text-5xl text-4xl font-bold font-bree mb-10">
                    Dairy Widari Villa
                </h2>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6 px-6">
                    <a href="https://www.instagram.com/reel/DUsYcmOEpHD/" target="_blank">
                        <video autoplay muted loop playsinline class="w-full h-40 object-cover rounded-xl hover:opacity-80 transition">
                            <source src="{{ asset('videos/reel1.mp4') }}" type="video/mp4">
                        </video>
                    </a>
                    <div class="bg-gray-300 h-40"></div>
                    <div class="bg-gray-300 h-40"></div>
                    <div class="bg-gray-300 h-40"></div>
                    <div class="bg-gray-300 h-40"></div>
                    <div class="bg-gray-300 h-40"></div>
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
                        Widari Villas is a tranquil retreat nestled in the heart of Ubud, designed with the elegance of traditional Joglo architecture. Surrounded by Ubud's signature rice paddy views, we offer the perfect blend of comfort, culture, and tranquility. Experience warm hospitality and unforgettable moments in a setting where every detail is designed for your relaxation.
                    </p>
                </div>
            </div>
        </section>
        <section class="py-20 bg-gray-100">
            <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12">
                <div class="flex flex-col items-center justify-center md:justify-center">
                    <h2 class="sm:text-5xl text-4xl font-bold font-bree">
                        FAQ
                    </h2>
                    <p class="sm:text-xl text-base font-semibold">
                        Frequently Asked Questions
                    </p>
                </div>
                <div class="space-y-4">
                    <div class="bg-white rounded-lg shadow sm:text-lg text-base">
                        <button class="w-full text-left p-5 font-semibold flex justify-between items-center faq-btn">
                            What time is check-in and check-out?
                            <span>+</span>
                        </button>
                        <div class="hidden px-5 pb-5 text-gray-600">
                            We will be happy to offer you an early check-in but it’s a subject of availability. If we won’t have a guest one day before your arrival, you are welcome to check-in early. Our check-in time starts at 02.00 pm 😊
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow">
                        <button class="w-full text-left p-5 font-semibold flex justify-between items-center faq-btn">
                            What happens after I make a booking?
                            <span>+</span>
                        </button>
                        <div class="hidden px-5 pb-5 text-gray-600">
                            We will send you a confirmation email or Whastapp (if you have) with all the information about your booking, To ensure your comfort, we will contact you as a reminder one to two days before your stay, especially for reservations made well in advance.
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow">
                        <button class="w-full text-left p-5 font-semibold flex justify-between items-center faq-btn">
                            Is breakfast included in the price?
                            <span>+</span>
                        </button>
                        <div class="hidden px-5 pb-5 text-gray-600">
                            Breakfast is available as an additional option. Some of our packages already include breakfast, but you can also choose to add it if you prefer.
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow">
                        <button class="w-full text-left p-5 font-semibold flex justify-between items-center faq-btn">
                            Are kitchen facilities available?
                            <span>+</span>
                        </button>
                        <div class="hidden px-5 pb-5 text-gray-600">
                            Yes, the villa is equipped with a kitchen, allowing you to prepare meals or enjoy a more home-like experience during your stay.
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow">
                        <button class="w-full text-left p-5 font-semibold flex justify-between items-center faq-btn">
                            Do you offer tour guide services or tours?
                            <span>+</span>
                        </button>
                        <div class="hidden px-5 pb-5 text-gray-600">
                            Yes, we offer tours and private guide services designed to provide the best possible experience exploring Ubud and its surroundings comfortably and memorable.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-6">
                <div class="relative rounded-lg overflow-hidden">
                    <img src="{{ asset('images/hero3.webp')}}" class="w-full h-[260px] object-cover">
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="absolute inset-0 flex flex-col justify-center items-start px-10">
                        <h2 class="text-white text-xl sm:text-3xl font-bold leading-snug max-w-xl">
                            FIND SERENITY IN THE NATURAL WOOD FINISHES AND 
                            SOOTHING TRADITIONAL AMBIANCE.
                        </h2>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=widarivilla@gmail.com" class="mt-6 bg-white text-black px-8 py-3 font-semibold shadow hover:bg-gray-200 transition">
                            Booking Now
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</main>
<script async src="//www.instagram.com/embed.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
const wrapper = document.querySelector('.swiper-wrapper');
const slides = document.querySelectorAll('.swiper-slide');

if (slides.length % 2 === 0) {
    wrapper.appendChild(slides[0].cloneNode(true));
}
const swiper = new Swiper(".mySwiper", {
    loop: true,
    centeredSlides: true,
    slidesPerView: 1,
    spaceBetween: 25,
    grabCursor: true,
    speed: 800,

    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 12,
        },
        768: {
            slidesPerView: 1.2,
            spaceBetween: 16,
        },
        1024: {
            slidesPerView: 1.6,
            spaceBetween: 20,
        },
        1280: {
            slidesPerView: 2,
            spaceBetween: 24,
        },
    },
});
</script>
<script>
function heroSlider() {
    return {
        current: 0,
        images: [
            '/images/hero-WidariVilla.webp',
            '/images/hero-WidariVilla1.webp',
            '/images/hero-WidariVilla2.webp',
            '/images/hero-WidariVilla3.webp',
            '/images/hero-WidariVilla4.webp',
            '/images/hero-WidariVilla5.webp',
        ],
        start() {
            setInterval(() => {
                this.current = (this.current + 1) % this.images.length;
            }, 3000); 
        }
    }
}
</script>