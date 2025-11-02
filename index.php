<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ✅ SEO -->
    <title>Haven International Spa - Oasis of Tranquility & Wellness</title>
    <meta name="description" content="Haven International Spa offers luxury massage, facial, and aromatherapy treatments to relax and rejuvenate." />
    <meta name="keywords" content="spa, massage, aromatherapy, facial, wellness, relaxation, Haven Spa" />
    <meta name="author" content="Haven International Spa" />

    <!-- ✅ CSP -->
    <meta http-equiv="Content-Security-Policy" content="
        default-src 'self';
        script-src 'self' https://cdn.tailwindcss.com 'unsafe-inline';
        style-src 'self' https://fonts.googleapis.com 'unsafe-inline';
        font-src 'self' https://fonts.gstatic.com;
        img-src 'self' data: blob: https://images.unsplash.com https://placehold.co;
        frame-ancestors 'none';
    " />

    <!-- ✅ Tailwind + Fonts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

    <!-- ✅ Your local stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">

    <style>
        /* Fallback styling (for demo) */
        body { font-family: 'Inter', sans-serif; transition: background-color 0.5s, color 0.5s; }
        .font-playfair { font-family: 'Playfair Display', serif; }

        .hero-bg {
            background-image: url('https://images.unsplash.com/photo-1544161515-cfd696dba485?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }

        #preloader {
            transition: opacity 0.5s ease-out;
            background-color: #fff;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dark body { background-color: #111827; color: #e5e7eb; }
        .dark .bg-white { background-color: #1f2937; color: #e5e7eb; }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- ✅ Preloader (uses your file path) -->
    <div id="preloader" class="fixed top-0 left-0 w-full h-full flex justify-center items-center z-[100] bg-white">
        <img src="assets/images/loader.gif" alt="Loading..." class="w-28 h-28 rounded-full shadow-lg" />
    </div>

    <!-- ✅ Header -->
    <header id="header" class="bg-white/80 backdrop-blur-md fixed top-0 left-0 right-0 z-50 shadow-sm">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="flex items-center gap-3 text-2xl font-playfair font-bold text-gray-800">
                <img src="https://placehold.co/32x32/166534/ffffff?text=H" class="h-8 w-8 rounded-full" alt="Logo">
                <span>Haven International Spa</span>
            </a>

            <nav class="hidden md:flex space-x-8">
                <a href="#home" class="hover:text-green-700">Home</a>
                <a href="#services" class="hover:text-green-700">Services</a>
                <a href="#about" class="hover:text-green-700">About</a>
                <a href="#gallery" class="hover:text-green-700">Gallery</a>
                <a href="#contact" class="hover:text-green-700">Contact</a>
            </nav>

            <div class="flex items-center gap-4">
                <button id="dark-toggle" class="text-gray-700 hover:text-green-700">🌙</button>
                <button id="mobile-menu-button" class="md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden px-6 pb-4">
            <a href="#home" class="block py-2">Home</a>
            <a href="#services" class="block py-2">Services</a>
            <a href="#about" class="block py-2">About</a>
            <a href="#gallery" class="block py-2">Gallery</a>
            <a href="#contact" class="block py-2">Contact</a>
        </div>
    </header>

    <!-- ✅ Hero Section -->
    <section id="home" class="hero-bg h-screen flex items-center justify-center text-center text-white">
        <div class="bg-black/50 p-12 rounded-lg max-w-2xl mx-auto fade-in">
            <h1 class="text-5xl font-playfair font-bold mb-4">Experience True Tranquility</h1>
            <p class="text-lg mb-8">Rediscover peace and balance in our oasis of calm.</p>
            <a href="#contact" class="bg-green-700 hover:bg-green-800 text-white py-3 px-8 rounded-full font-bold">Book Now</a>
        </div>
    </section>

    <!-- ✅ Services -->
    <section id="services" class="py-20 bg-white fade-in">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-playfair font-bold mb-6">Our Signature Services</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-12">Rejuvenate your body, mind, and spirit with our curated treatments.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1512290923902-8a9f31c83659?q=80&w=2070&auto=format&fit=crop" class="w-full h-48 object-cover" alt="">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2">Swedish Massage</h3>
                        <p>Ease muscle tension and boost circulation for deep relaxation.</p>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?q=80&w=2070&auto=format&fit=crop" class="w-full h-48 object-cover" alt="">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2">Aromatherapy</h3>
                        <p>Calming essential oils to restore harmony and energy.</p>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?q=80&w=1974&auto=format&fit=crop" class="w-full h-48 object-cover" alt="">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2">Hot Stone Therapy</h3>
                        <p>Warm stones gently melt away tension and stress.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ✅ Contact -->
    <section id="contact" class="py-20 bg-gray-100 fade-in">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-playfair font-bold mb-6">Book Your Escape</h2>
            <p class="text-gray-600 mb-12">Contact us to begin your journey to total relaxation.</p>

            <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <input id="name" type="text" placeholder="Full Name" class="border rounded-md px-4 py-2 w-full">
                    <input id="email" type="email" placeholder="Email Address" class="border rounded-md px-4 py-2 w-full">
                </div>
                <select id="service" class="border rounded-md px-4 py-2 w-full mb-6">
                    <option value="">Select a service</option>
                    <option>Swedish Massage</option>
                    <option>Aromatherapy</option>
                    <option>Hot Stone Therapy</option>
                </select>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <input id="date" type="date" class="border rounded-md px-4 py-2 w-full">
                    <input id="time" type="time" class="border rounded-md px-4 py-2 w-full">
                </div>
                <button id="send-whatsapp-btn" class="bg-green-700 hover:bg-green-800 text-white py-3 px-12 rounded-full font-bold">Send Inquiry on WhatsApp</button>
            </div>
        </div>
    </section>

    <!-- ✅ Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6 text-center">
            <p class="text-2xl font-playfair font-bold mb-4">Haven International Spa</p>
            <p class="text-gray-400">&copy; <span id="current-year"></span> Haven International Spa. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- ✅ Floating Buttons -->
    <div class="fixed bottom-5 right-5 z-50 flex flex-col gap-4">
        <a href="https://wa.me/919108238201?text=Hello%20I'm%20interested%20in%20your%20services" target="_blank" class="bg-green-500 hover:bg-green-600 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg transition-transform transform hover:scale-110">💬</a>
        <a href="tel:+919108238201" class="bg-blue-500 hover:bg-blue-600 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg transition-transform transform hover:scale-110">📞</a>
    </div>

    <!-- ✅ JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const preloader = document.getElementById('preloader');
            const hidePreloader = () => {
                preloader.style.opacity = '0';
                setTimeout(() => preloader.style.display = 'none', 500);
            };
            window.addEventListener('load', hidePreloader);
            setTimeout(hidePreloader, 3000);

            document.getElementById('mobile-menu-button').addEventListener('click', () => {
                document.getElementById('mobile-menu').classList.toggle('hidden');
            });

            document.querySelectorAll('#mobile-menu a').forEach(link => {
                link.addEventListener('click', () => document.getElementById('mobile-menu').classList.add('hidden'));
            });

            document.getElementById('send-whatsapp-btn').addEventListener('click', () => {
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const service = document.getElementById('service').value;
                const date = document.getElementById('date').value;
                const time = document.getElementById('time').value;
                if (!name || !email || !service || !date || !time) {
                    alert('Please fill all fields before sending.');
                    return;
                }
                const msg = `Hello Haven International Spa,%0A%0AI'd like to book an appointment.%0A%0A*Name:* ${name}%0A*Email:* ${email}%0A*Service:* ${service}%0A*Date:* ${date}%0A*Time:* ${time}%0A%0APlease confirm my booking.`;
                window.open(`https://wa.me/919108238201?text=${msg}`, '_blank');
            });

            const darkToggle = document.getElementById('dark-toggle');
            darkToggle.addEventListener('click', () => {
                document.documentElement.classList.toggle('dark');
                darkToggle.textContent = document.documentElement.classList.contains('dark') ? '☀️' : '🌙';
            });

            document.getElementById('current-year').textContent = new Date().getFullYear();
        });
    </script>
</body>
</html>