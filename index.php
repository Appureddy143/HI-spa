<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haven International Spa - Your Oasis of Tranquility</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Custom styles to extend Tailwind */
        body {
            font-family: 'Inter', sans-serif;
        }
        .font-playfair {
            font-family: 'Playfair Display', serif;
        }
.hero-bg {
    background-image: url('assets/back.png');
        }
        .gallery-img {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .gallery-img:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        /* Preloader styles */
        #preloader {
            transition: opacity 0.5s ease-out;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Preloader -->
    <div id="preloader" class="fixed top-0 left-0 w-full h-full bg-white flex justify-center items-center z-[100]">
        <img src="assets/loader.gif" alt="Loading animation" class="w-32 h-32 rounded-full object-cover shadow-lg">
    </div>

    <!-- Header & Navigation -->
    <header id="header" class="bg-white/80 backdrop-blur-md fixed top-0 left-0 right-0 z-50 shadow-sm">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="flex items-center gap-3 text-2xl font-playfair font-bold text-gray-800">
                <img src="assets/logo.png" alt="Haven International Spa Logo" class="h-8 w-8">
                <span>Haven International Spa</span>
            </a>
            <nav class="hidden md:flex space-x-8">
                <a href="#home" class="text-gray-600 hover:text-green-700 transition duration-300">Home</a>
                <a href="#services" class="text-gray-600 hover:text-green-700 transition duration-300">Services</a>
                <a href="#about" class="text-gray-600 hover:text-green-700 transition duration-300">About Us</a>
                <a href="#gallery" class="text-gray-600 hover:text-green-700 transition duration-300">Gallery</a>
                <a href="#contact" class="text-gray-600 hover:text-green-700 transition duration-300">Contact</a>
            </nav>
            <button id="mobile-menu-button" class="md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden px-6 pb-4">
            <a href="#home" class="block py-2 text-gray-600 hover:text-green-700">Home</a>
            <a href="#services" class="block py-2 text-gray-600 hover:text-green-700">Services</a>
            <a href="#about" class="block py-2 text-gray-600 hover:text-green-700">About Us</a>
            <a href="#gallery" class="block py-2 text-gray-600 hover:text-green-700">Gallery</a>
            <a href="#contact" class="block py-2 text-gray-600 hover:text-green-700">Contact</a>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section id="home" class="hero-bg h-screen bg-cover bg-center flex items-center justify-center">
            <div class="bg-black/40 text-white text-center p-12 rounded-lg max-w-2xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-playfair font-bold mb-4">Experience True Tranquility</h1>
                <p class="text-lg mb-8">Rediscover your inner peace in our oasis of calm. Your journey to relaxation starts here.</p>
                <a href="#contact" class="bg-green-700 hover:bg-green-800 text-white font-bold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105">Book An Appointment</a>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-playfair font-bold text-gray-800">Our Signature Services</h2>
                    <p class="text-gray-600 mt-4 max-w-2xl mx-auto">We offer a curated selection of treatments designed to rejuvenate your body, mind, and soul.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Service Card 1 -->
                    <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden">
                        <img src="assets/l1.png" alt="Swedish Massage" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Swedish Massage</h3>
                            <p class="text-gray-600">A classic relaxing massage to ease muscle tension and improve circulation.</p>
                        </div>
                    </div>
                    <!-- Service Card 2 -->
                    <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?q=80&w=2070&auto=format&fit=crop" alt="Aromatherapy" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Aromatherapy</h3>
                            <p class="text-gray-600">Uses essential oils to promote healing and a feeling of well-being.</p>
                        </div>
                    </div>
                    <!-- Service Card 3 -->
                    <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?q=80&w=1974&auto=format&fit=crop" alt="Hot Stone Therapy" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Hot Stone Therapy</h3>
                            <p class="text-gray-600">Heated stones are placed on the body to soothe muscles and relieve stress.</p>
                        </div>
                    </div>
                    <!-- Service Card 4 -->
                    <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?q=80&w=2070&auto=format&fit=crop" alt="Deep Tissue Massage" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Deep Tissue Massage</h3>
                            <p class="text-gray-600">Targets deeper layers of muscle to release chronic knots and tension.</p>
                        </div>
                    </div>
                    <!-- Service Card 5 -->
                    <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?q=80&w=2070&auto=format&fit=crop" alt="Rejuvenating Facial" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Rejuvenating Facial</h3>
                            <p class="text-gray-600">A custom facial to cleanse, exfoliate, and nourish the skin for a radiant glow.</p>
                        </div>
                    </div>
                    <!-- Service Card 6 -->
                    <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1552693673-1bf958298935?q=80&w=2070&auto=format&fit=crop" alt="Couples Package" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Couples Package</h3>
                            <p class="text-gray-600">Enjoy a relaxing massage side-by-side with a partner in our private suite.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Us Section -->
        <section id="about" class="py-20 bg-green-50">
            <div class="container mx-auto px-6 flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1596178065887-1198b6148b2b?q=80&w=2070&auto=format&fit=crop" alt="Spa Interior" class="rounded-lg shadow-xl w-full">
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-4xl font-playfair font-bold text-gray-800 mb-4">Your Sanctuary for Wellness</h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Welcome to Haven International Spa, where we believe in the power of touch and the art of relaxation. Our mission is to provide a peaceful escape from the demands of everyday life. Our team of certified therapists is dedicated to creating a personalized wellness experience that addresses your unique needs, leaving you refreshed, renewed, and completely at ease.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        We use only the finest natural and organic products, ensuring a treatment that is as kind to the earth as it is to your body.
                    </p>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section id="gallery" class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-playfair font-bold text-gray-800">A Glimpse of Serenity</h2>
                    <p class="text-gray-600 mt-4">Explore the calming ambiance of our spa.</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="grid gap-4">
                        <div><img class="h-auto max-w-full rounded-lg gallery-img" src="assets/g1.png" alt="Gallery Image 1"></div>
                        <div><img class="h-auto max-w-full rounded-lg gallery-img" src="assets/g2.png" alt="Gallery Image 2"></div>
                    </div>
                    <div class="grid gap-4">
                        <div><img class="h-auto max-w-full rounded-lg gallery-img" src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?q=80&w=1964&auto=format&fit=crop" alt="Gallery Image 3"></div>
                        <div><img class="h-auto max-w-full rounded-lg gallery-img" src="https://images.unsplash.com/photo-1507034589631-9433cc6bc453?q=80&w=1968&auto=format&fit=crop" alt="Gallery Image 4"></div>
                    </div>
                    <div class="grid gap-4">
                        <div><img class="h-auto max-w-full rounded-lg gallery-img" src="assets/g3.png" alt="Gallery Image 5"></div>
                        <div><img class="h-auto max-w-full rounded-lg gallery-img" src="assets/g4.png" alt="Gallery Image 6"></div>
                    </div>
                    <div class="grid gap-4">
                        <div><img class="h-auto max-w-full rounded-lg gallery-img" src="assets/g5.png" alt="Gallery Image 7"></div>
                        <div><img class="h-auto max-w-full rounded-lg gallery-img" src="assets/g5.png" alt="Gallery Image 8"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-20 bg-gray-100">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-playfair font-bold text-gray-800">Book Your Escape</h2>
                    <p class="text-gray-600 mt-4">We're ready to help you begin your journey to relaxation. Contact us today.</p>
                </div>
                <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
                    <div id="inquiry-form" class="space-y-6">
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
                        <div class="text-center">
                            <button type="button" id="send-whatsapp-btn" class="bg-green-700 hover:bg-green-800 text-white font-bold py-3 px-12 rounded-full transition duration-300 transform hover:scale-105">Send Inquiry on WhatsApp</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6 text-center">
            <p class="text-2xl font-playfair font-bold mb-4">Haven International Spa</p>
            <div class="flex justify-center space-x-6 mb-6">
                <a href="#" class="hover:text-green-400">Facebook</a>
                <a href="#" class="hover:text-green-400">Instagram</a>
                <a href="#" class="hover:text-green-400">Twitter</a>
            </div>
            <p class="text-gray-400">&copy; <?php echo date("Y"); ?> Haven International Spa. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Floating Action Buttons -->
    <div class="fixed bottom-5 right-5 z-50 flex flex-col gap-4">
        <!-- WhatsApp Button -->
        <a href="https://wa.me/919108238201?text=Hello%20I'm%20interested%20in%20your%20services" target="_blank" rel="noopener noreferrer" title="Chat on WhatsApp" class="bg-green-500 hover:bg-green-600 text-white w-16 h-16 rounded-full flex items-center justify-center shadow-lg transition-transform transform hover:scale-110">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="currentColor">
                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-
