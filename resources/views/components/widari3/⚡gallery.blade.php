<main>
    <x-layouts.navbar3/>
    <main>
        <section class="relative h-[320px] w-full">
            <img src="/images/widari3/5.webp" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/50"></div>
            <div class="relative max-w-6xl mx-auto px-6 h-full flex flex-col justify-center text-white">
                <h1 class="text-5xl font-bold mb-2 font-bree">
                    Gallery
                </h1>
                <p class="text-md max-w-xl">
                    Experience the beauty of Widari Villa and traditional Joglo-style atmosphere
                </p>
            </div>
        </section>
        <section class="py-12 bg-white">
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-left text-2xl font-bold mb-8">
                    Front Area
                </h2>
                <div class="swiper myGallery relative">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/widari3/2.webp" class="w-full h-[250px] object-cover rounded-xl">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/widari3/6.webp" class="w-full h-[250px] object-cover rounded-xl">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/widari3/5.webp" class="w-full h-[250px] object-cover rounded-xl">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/widari3/14.webp" class="w-full h-[250px] object-cover rounded-xl">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/widari3/12.webp" class="w-full h-[250px] object-cover rounded-xl">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/widari3/13.webp" class="w-full h-[250px] object-cover rounded-xl">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <section class="py-8 bg-white">
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-Left text-2xl font-bold mb-8">
                    Bed Room Area
                </h2>
                <div class="swiper myGallery relative">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/widari3/1.webp" class="w-full h-[250px] object-cover rounded-xl">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/widari3/3.webp" class="w-full h-[250px] object-cover rounded-xl">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/widari3/4.webp" class="w-full h-[250px] object-cover rounded-xl">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/widari3/7.webp" class="w-full h-[250px] object-cover rounded-xl">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/widari3/8.webp" class="w-full h-[250px] object-cover rounded-xl">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <section class="py-12 bg-white">
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-Left text-2xl font-bold mb-8">
                    Bath Room Area
                </h2>
                <div class="swiper myGallery relative">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/widari3/9.webp" class="w-full h-[250px] object-cover rounded-xl">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/widari3/10.webp" class="w-full h-[250px] object-cover rounded-xl">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/widari3/11.webp" class="w-full h-[250px] object-cover rounded-xl">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
</main>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
var swiper = new Swiper(".myGallery", {
    loop: true,
    spaceBetween: 20,
    slidesPerView: 3,

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        0: {
            slidesPerView: 1
        },
        640: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        }
    }
});
</script>

</main>