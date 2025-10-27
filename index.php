<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haven International Spa | Relaxation Redefined</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Playfair Display', serif;
            scroll-behavior: smooth;
        }
        .hero-bg {
            background-image: url('https://images.unsplash.com/photo-1556228453-efd8b1a9e43c?auto=format&fit=crop&w=1600&q=80');
            background-size: cover;
            background-position: center;
        }
        .overlay {
            background-color: rgba(0, 0, 0, 0.55);
        }
    </style>
</head>
<body class="text-gray-900">

    <!-- Navbar -->
    <header class="fixed top-0 left-0 w-full bg-white shadow-md z-50">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <h1 class="text-2xl font-bold text-green-700">Haven International Spa</h1>
            <nav class="space-x-6 text-gray-700 font-medium">
                <a href="#home" class="hover:text-green-700">Home</a>
                <a href="#services" class="hover:text-green-700">Services</a>
                <a href="#about" class="hover:text-green-700">About</a>
                <a href="#contact" class="hover:text-green-700">Book</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero-bg h-screen flex items-center justify-center relative">
        <div class="overlay absolute inset-0"></div>
        <div class="relative z-10 text-center text-white px-6">
            <h2 class="text-5xl md:text-6xl font-bold mb-6">Relax. Refresh. Renew.</h2>
            <p class="text-xl mb-8">Escape into tranquility at Haven International Spa.</p>
            <a href="#contact" class="bg-green-700 hover:bg-green-800 text-white font-semibold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105">
                Book Your Escape
            </a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-10">Our Signature Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition">
                    <img src="https://images.unsplash.com/photo-1588776814546-885096d52957?auto=format&fit=crop&w=800&q=80" class="w-full h-48 object-cover rounded-xl mb-4" alt="">
                    <h3 class="text-2xl font-semibold text-green-700 mb-2">Swedish Massage</h3>
                    <p class="text-gray-600">A gentle full-body massage designed to relax muscles and improve circulation.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition">
                    <img src="https://images.unsplash.com/photo-1599058917212-d750089bc07e?auto=format&fit=crop&w=800&q=80" class="w-full h-48 object-cover rounded-xl mb-4" alt="">
                    <h3 class="text-2xl font-semibold text-green-700 mb-2">Aromatherapy</h3>
                    <p class="text-gray-600">Experience the healing power of essential oils blended for deep relaxation.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition">
                    <img src="https://images.unsplash.com/photo-1595426056760-046ed1a2b5c0?auto=format&fit=crop&w=800&q=80" class="w-full h-48 object-cover rounded-xl mb-4" alt="">
                    <h3 class="text-2xl font-semibold text-green-700 mb-2">Hot Stone Therapy</h3>
                    <p class="text-gray-600">Warm basalt stones melt away tension and soothe tired muscles for total comfort.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
            <img src="https://images.unsplash.com/photo-1588516903720-8b8dc0e0b3a6?auto=format&fit=crop&w=900&q=80" class="rounded-2xl shadow-lg" alt="">
            <div>
                <h2 class="text-4xl font-bold text-gray-800 mb-6">Your Sanctuary of Serenity</h2>
                <p class="text-gray-600 mb-4">
                    At Haven International Spa, we blend ancient wellness traditions with modern luxury to offer you an unforgettable relaxation experience.
                </p>
                <p class="text-gray-600">
                    Our therapists are highly trained professionals dedicated to restoring your balance and rejuvenating your mind, body, and soul.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact / Booking Section -->
    <section id="contact" class="py-20 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800">Book Your Escape</h2>
                <p class="text-gray-600 mt-4">Choose your preferred date and time below and send us your booking request via WhatsApp.</p>
            </div>

            <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
                <div id="inquiry-form" class="space-y-6">
                    <!-- Name & Email -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
                            <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600" placeholder="John Doe" required>
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                            <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600" placeholder="johndoe@example.com" required>
                        </div>
                    </div>

                    <!-- Date & Time -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="date" class="block text-gray-700 font-medium mb-2">Preferred Date</label>
                            <input type="date" id="date" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600" required>
                        </div>
                        <div>
                            <label for="time" class="block text-gray-700 font-medium mb-2">Preferred Time</label>
                            <input type="time" id="time" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600" required>
                        </div>
                    </div>

                    <!-- Service -->
                    <div>
                        <label for="service" class="block text-gray-700 font-medium mb-2">Preferred Service</label>
                        <select id="service" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600" required>
                            <option value="">Select a service</option>
                            <option>Swedish Massage</option>
                            <option>Aromatherapy</option>
                            <option>Hot Stone Therapy</option>
                            <option>Deep Tissue Massage</option>
                            <option>Rejuvenating Facial</option>
                            <option>Couples Package</option>
                        </select>
                    </div>


                    <!-- Submit -->
                    <div class="text-center">
                        <button type="button" id="send-whatsapp-btn" class="bg-green-700 hover:bg-green-800 text-white font-bold py-3 px-12 rounded-full transition duration-300 transform hover:scale-105">
                            Send Inquiry on WhatsApp
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-700 text-white py-6 text-center">
        <p>© 2025 Haven International Spa | All Rights Reserved</p>
    </footer>

    <!-- WhatsApp Form Script -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Restrict date picker to today and future
        const dateInput = document.getElementById('date');
        const today = new Date().toISOString().split('T')[0];
        dateInput.setAttribute('min', today);

        // WhatsApp sending logic
        document.getElementById('send-whatsapp-btn').addEventListener('click', function() {
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const service = document.getElementById('service').value;
            const date = document.getElementById('date').value;
            const time = document.getElementById('time').value;
            const message = document.getElementById('message').value.trim();

            if (!name || !email || !service || !date || !time) {
                alert('⚠️ Please fill in all required fields including Date and Time.');
                return;
            }

            const phoneNumber = '919108238201'; // without +
            let inquiryMessage = `Hello! I would like to book an appointment.\n\n`;
            inquiryMessage += `*Name:* ${name}\n`;
            inquiryMessage += `*Email:* ${email}\n`;
            inquiryMessage += `*Preferred Service:* ${service}\n`;
            inquiryMessage += `*Preferred Date:* ${date}\n`;
            inquiryMessage += `*Preferred Time:* ${time}\n`;

            const encodedMessage = encodeURIComponent(inquiryMessage);
            const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;
            window.open(whatsappUrl, '_blank');
        });
    });
    </script>
</body>
</html>
