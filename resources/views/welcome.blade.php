<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Bali Service</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">GlobalService</h1>
            <div class="space-x-6 hidden md:block">
                <a href="#" class="text-gray-700 hover:text-blue-600">Home</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Services</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Contact</a>
            </div>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                Get Started
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-blue-600 text-white py-20">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Professional Visa & Travel Services in Bali
            </h2>
            <p class="text-lg mb-8 text-blue-100">
                Fast process, trusted service, and professional team to help your journey in Indonesia.
            </p>
            <button class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-200">
                Book Now
            </button>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-6">
            <h3 class="text-3xl font-bold text-center mb-12">Our Services</h3>

            <div class="grid md:grid-cols-3 gap-8">
                
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition">
                    <h4 class="text-xl font-semibold mb-4">Visa on Arrival</h4>
                    <p class="text-gray-600">
                        Easy and fast Visa on Arrival processing with guaranteed approval support.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition">
                    <h4 class="text-xl font-semibold mb-4">Business Visa</h4>
                    <p class="text-gray-600">
                        Professional assistance for business and investor visa applications.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition">
                    <h4 class="text-xl font-semibold mb-4">Villa Booking</h4>
                    <p class="text-gray-600">
                        Exclusive villa recommendations with premium hospitality services.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-10">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p>© 2026 GlobalService. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>