<main>
    <x-layouts.navbar/>
    <main>
        <section class="relative h-64 w-full shadow-xl">
            <div class="absolute inset-0">
                <img src="{{ asset('/images/hero-WidariVilla.webp') }}" class="w-full h-full object-cover" alt="Widari Villa">
            </div>
            <div class="absolute inset-0 bg-black/40"></div>
            <div class="relative z-10 flex items-end h-full text-left sm:px-30 px-6 py-8">
                <div class="text-white font-bree justify-end">
                    <h1 class="text-5xl md:text-6xl font-bold tracking-wide">
                        Contact Us
                    </h1>
                </div>
            </div>
        </section>
        <section class="py-10 bg-white">
            <div class="max-w-6xl mx-auto px-2 font-bree">
                <div class="bg-white rounded-xl shadow-md p-10">
                    <h2 class="text-2xl font-bold mb-2">
                        Plan Your Stay With Us
                    </h2>
                    <p class="sm:text-lg text-base mb-10">
                        Contact our team today to check availability, request special arrangements, or create a memorable experience at Widari Villa.
                    </p>
                    <!-- GRID -->
                    <div class="grid md:grid-cols-2 gap-10">
                        <!-- FORM -->
                        <form wire:submit.prevent="send" class="space-y-6">
                            <div>
                                <label class="block font-semibold mb-2">Name</label>
                                <input type="text" wire:model="name"
                                    class="w-full bg-[#593d1d] rounded-lg px-4 py-3 outline-none text-white">
                                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label class="block font-semibold mb-2">Email</label>
                                <input type="email" wire:model="email"
                                    class="w-full text-white bg-[#593d1d] rounded-lg px-4 py-3 outline-none">
                                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label class="block font-semibold mb-2">Phone</label>
                                <div class="flex">
                                    <span class="bg-[#674721] text-white px-3 flex items-center rounded-l-lg">+</span>
                                    <input type="text" wire:model="phone"
                                        placeholder="628123456789"
                                        class="w-full bg-[#593d1d] rounded-r-lg px-4 py-3 outline-none text-white">
                                </div>
                                <small class="text-black">
                                Use country code (Example: 628..., 1555..., 447...)
                            </small>
                            </div>
                            <div>
                                <label class="block font-semibold mb-2">Subject</label>
                                <input type="text" wire:model="subject"
                                    class="w-full bg-[#593d1d] rounded-lg px-4 py-3 outline-none text-white">
                            </div>
                            <div>
                                <label class="block font-semibold mb-2">Message</label>
                                <textarea rows="4" wire:model="message"
                                    class="w-full bg-[#593d1d] rounded-lg px-4 py-3 outline-none text-white"></textarea>
                            </div>
                            <button type="submit" class="bg-[#5b2d1a] text-white px-8 py-3 rounded-lg hover:bg-[#4a2314] transition">
                                <span wire:loading.remove>Send Message</span>
                                <span wire:loading>Sending...</span>
                            </button>
                            @if (session()->has('success'))
                                <div class="text-green-600">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </form>
                        <!-- GOOGLE MAPS -->
                        <div class="w-full h-full">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.877480280237!2d115.24328457501291!3d-8.511275291530836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23d001c696b0b%3A0x92a4b30a6b8f2733!2sWidari%20Villa!5e0!3m2!1sid!2sid!4v1772978206018!5m2!1sid!2sid"
                                class="w-full h-full min-h-[400px] rounded-lg border-0"
                                allowfullscreen=""
                                loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-12 bg-gray-100">
            <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-8 font-bree">
                <div>
                    <h2 class="text-xl font-semibold mb-4">Chat With Us</h2>
                    <div class="space-y-6">
                        <a href="https://wa.me/6281215986658" target="_blank" class="flex items-center space-x-4 bg-white rounded-lg shadow-md h-20 px-6 hover:scale-105 transition">
                            <div class="w-12 h-12 bg-green-500 text-white flex items-center justify-center rounded-full">
                                <i class="fa-brands fa-whatsapp text-2xl"></i>
                            </div>
                            <div>
                                <p class="font-semibold">WhatsApp</p>
                                <p class="text-sm text-gray-500">+62 812 1598 6658</p>
                            </div>
                        </a>        
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=widarivilla@gmail.com" class="flex items-center space-x-4 bg-white rounded-lg shadow-md h-20 px-6 hover:scale-105 transition">
                            <div class="w-12 h-12 bg-[#5b2d1a] text-white flex items-center justify-center rounded-full">
                                <i class="fa-solid fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <p class="font-semibold">Email</p>
                                <p class="text-sm text-gray-500">widarivilla@gmail.com</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h2 class="text-xl font-semibold mb-6">Social Media</h2>
                    <div class="grid grid-cols-3 gap-6 text-center">
                        <a href="https://instagram.com/widari_villa" target="_blank" class="flex flex-col items-center justify-center bg-pink-500 text-white h-20 rounded-lg hover:scale-105 transition">
                           <i class="fa-brands fa-instagram text-xl"></i>
                            <span class="text-sm font-medium">Instagram</span>
                        </a>
                        <a href="https://tiktok.com/@widari.villa" target="_blank" class="flex flex-col items-center justify-center bg-black text-white h-20 rounded-lg hover:scale-105 transition">
                            <i class="fa-brands fa-tiktok text-xl"></i>
                            <span class="text-sm font-medium">TikTok</span>
                        </a>
                        <a href="https://www.facebook.com/share/18HHEstxUy/?mibextid=wwXIfr" target="_blank" class="flex flex-col items-center justify-center bg-blue-600 text-white h-20 rounded-lg hover:scale-105 transition">
                            <i class="fa-brands fa-facebook-f text-xl"></i>
                            <span class="text-sm font-medium">Facebook</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</main>