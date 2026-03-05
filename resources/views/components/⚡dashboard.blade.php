<main>
    <section class="relative h-screen w-full">
      <!-- Background Image -->
      <div class="absolute inset-0">
        <img src="{{ asset('images/hero-WidariVilla.jpg') }}" class="w-full h-full object-cover" alt="Widari Villa">
      </div>
      <!-- Overlay -->
      <div class="absolute inset-0 bg-black/40"></div>

      <!-- Content -->
      <div class="relative z-10 flex items-center justify-center h-full text-center px-6">
        <div class="text-white font-bree">
            <h1 class="text-4xl md:text-6xl font-bold tracking-wide">
                Widari Villa
            </h1>
            <p class="mt-4 text-lg md:text-xl font-light tracking-wide">
                Serene Strays for Soulful Journeys
            </p>
        </div>
      </div>
    </section>
    <section class="py-20 bg-gray-100">

    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bree">
            Browser Our Villas
        </h2>
    </div>

    <div class="swiper mySwiper px-6">

        <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="relative">
                    <img src="{{ asset('images/hero-WidariVilla.jpg') }}" 
                         class="w-full h-[500px] object-cover rounded-xl" />

                    <!-- Card Overlay -->
                    <div class="absolute bottom-10 left-10 bg-white p-8 w-[350px] shadow-xl">
                        <h3 class="text-3xl font-bree mb-2">
                            Widari Villa 1
                        </h3>
                        <p class="text-xl">
                            Double Bed
                        </p>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="relative">
                    <img src="{{ asset('images/hero-WidariVilla.jpg') }}" 
                         class="w-full h-[500px] object-cover rounded-xl" />

                    <div class="absolute bottom-10 left-10 bg-white p-8 w-[350px] shadow-xl">
                        <h3 class="text-3xl font-bree mb-2">
                            Widari Villa 2
                        </h3>
                        <p class="text-xl">
                            Twin Bed
                        </p>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide">
                <div class="relative">
                    <img src="{{ asset('images/hero-WidariVilla.jpg') }}" 
                         class="w-full h-[500px] object-cover rounded-xl" />

                    <div class="absolute bottom-10 left-10 bg-white p-8 w-[350px] shadow-xl">
                        <h3 class="text-3xl font-bree mb-2">
                            Widari Villa 3
                        </h3>
                        <p class="text-xl">
                            King Bed
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Navigation -->
        <div class="swiper-button-next !text-white"></div>
        <div class="swiper-button-prev !text-white"></div>

    </div>

</section>
<section class="bg-[#f4f4f4] py-20">
    <div class="max-w-6xl mx-auto px-6">
        
        <!-- Title -->
        <h2 class="text-4xl md:text-5xl font-bree text-center mb-16">
            About Widari Villa
        </h2>

        <!-- Content -->
        <div class="grid md:grid-cols-2 gap-12 items-center">
            
            <!-- Image -->
            <div>
                <img 
                    src="your-image.jpg" 
                    alt="Widari Villa Pool"
                    class="rounded-2xl shadow-lg w-full object-cover"
                >
            </div>

            <!-- Text -->
            <div>
                <h3 class="text-2xl md:text-3xl font-bree mb-6">
                    A beautiful place to enjoy every moment.
                </h3>

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
<section class="bg-[#f4f4f4] py-24">
    <div class="max-w-6xl mx-auto px-6 text-center">

        <!-- Small Title -->
        <p class="text-gray-600 text-lg mb-4 tracking-wide">
            Make it Easy
        </p>

        <!-- Main Title -->
        <h2 class="text-5xl md:text-6xl font-bree mb-10">
            Service
        </h2>

        <!-- Description -->
        <p class="max-w-4xl mx-auto text-xl leading-relaxed text-gray-800 mb-16">
            We believe that every guest is family. From the moment you arrive 
            until you leave, our team is ready to ensure your comfort and needs 
            are met. We provide daily housekeeping, tour and transportation 
            reservation assistance, and recommendations for the best attractions 
            around the villa to make your vacation even more memorable. 
            Let us take care of everything while you enjoy every moment of your stay.
        </p>

        <!-- 3 Service Boxes -->
        <div class="grid md:grid-cols-3 gap-10">
            
            <div class="bg-gray-300 h-48 rounded-xl shadow-md"></div>
            <div class="bg-gray-300 h-48 rounded-xl shadow-md"></div>
            <div class="bg-gray-300 h-48 rounded-xl shadow-md"></div>

        </div>

    </div>
</section>
  <section class="max-w-6xl mx-auto py-20 px-6">
    
    <!-- Header -->
    <div class="text-center mb-16">
      <p class="text-gray-500 text-lg">
        More Than a Stay, It’s a Memory
      </p>
      <h2 class="text-5xl font-bold mt-2">
        Top Best Our Villas
      </h2>
    </div>

    <!-- Content -->
    <div class="grid md:grid-cols-2 gap-16 items-center">
      
      <!-- Image Section -->
      <div class="relative w-full max-w-md">
        
        <!-- Brown Background Box -->
        <div class="absolute -bottom-8 -right-8 w-full h-full bg-[#5a3423] rounded-3xl"></div>
        
        <!-- Main Image -->
        <img src="https://images.unsplash.com/photo-1616594039964-ae9021a400a0"
             alt="Villa Room"
             class="relative rounded-3xl shadow-lg object-cover w-full">
      </div>

      <!-- Text Section -->
      <div>
        <h3 class="text-4xl font-semibold mb-6">
          Widari Villa 1
        </h3>
        <p class="text-gray-700 leading-relaxed text-lg mb-6">
          Not just a place to stay, access to the swimming pool and 
          close to the kitchen provides quick access equipped with 
          comfortable facilities.
        </p>
        <a href="#" class="text-lg font-medium underline hover:text-[#5a3423] transition">
          See More
        </a>
      </div>

    </div>

  </section>
  <section class="max-w-6xl mx-auto px-6 py-20 text-center">

    <!-- Small Text -->
    <p class="text-gray-600 text-lg mb-2">
      See more
    </p>

    <!-- Title -->
    <h2 class="text-5xl font-bold mb-8">
      Ubud Tourism
    </h2>

    <!-- Description -->
    <div class="max-w-4xl mx-auto text-xl leading-relaxed text-gray-800 space-y-4 mb-14">
      <p>
        Wake up to the sound of nature, breathe in the fresh tropical air,
        and unwind in your own private sanctuary.
      </p>
      <p>
        Located in the cultural heart of Bali, our villa blends authentic
        Balinese charm with modern comfort creating moments you’ll never forget.
      </p>
    </div>

    <!-- Image -->
    <div class="overflow-hidden rounded-3xl shadow-lg">
      <img 
        src="https://images.unsplash.com/photo-1604999333679-b86d54738315"
        alt="Ubud Rice Field"
        class="w-full h-[400px] object-cover"
      >
    </div>

    <!-- Bottom Text -->
    <p class="text-2xl font-semibold mt-12">
      Consultation For Guide Ubud
    </p>

  </section>
</main>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1.3,
    centeredSlides: true,
    spaceBetween: 30,

    loop: true,
    loopAdditionalSlides: 3,

    speed: 1200, // lebih smooth (lebih besar lebih halus)

    autoplay: {
        delay: 0,              // penting untuk smooth continuous
        disableOnInteraction: false,
    },

    freeMode: true,            // bikin sliding terasa natural
    freeModeMomentum: false,

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        768: { slidesPerView: 1.8 },
        1024: { slidesPerView: 2.2 }
    }
});
</script>