<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="Content-Security-Policy" content="
    default-src 'self';
    script-src 'self' https://cdn.tailwindcss.com https://cdnjs.cloudflare.com 'unsafe-inline';
    style-src 'self' https://fonts.googleapis.com 'unsafe-inline';
    font-src 'self' https://fonts.gstatic.com;
    img-src 'self' https://images.unsplash.com https://placehold.co data:;
    frame-src https://lottie.host;
    frame-ancestors 'none';
  ">

  <title>Haven International Spa - Your Oasis of Tranquility</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
    .font-playfair {
      font-family: 'Playfair Display', serif;
    }
    .hero-bg {
      background-image: url('https://images.unsplash.com/photo-1544161515-cfd696dba485?q=80&w=2070&auto=format&fit=crop');
    }
    .gallery-img {
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }
    .gallery-img:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
                  0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Preloader -->
  <div id="preloader" class="fixed top-0 left-0 w-full h-full bg-white flex flex-col justify-center items-center z-[100]">
    <iframe src="https://lottie.host/embed/4f285f0b-cf2b-46db-8b53-44849b75fef9/mrjzK7AxHg.json"
            style="width:150px; height:150px; border:none;">
    </iframe>
    <p class="mt-4 text-green-700 font-playfair text-xl">Preparing your oasis...</p>
  </div>

  <!-- Header -->
  <header id="header" class="bg-white/80 backdrop-blur-md fixed top-0 left-0 right-0 z-50 shadow-sm">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <a href="#" class="flex items-center gap-3 text-2xl font-playfair font-bold text-gray-800">
        <img src="https://placehold.co/32x32/166534/ffffff?text=H" alt="Haven Spa Logo" class="h-8 w-8 rounded-full">
        <span>Haven International Spa</span>
      </a>
      <nav class="hidden md:flex space-x-8">
        <a href="#home" class="text-gray-600 hover:text-green-700">Home</a>
        <a href="#services" class="text-gray-600 hover:text-green-700">Services</a>
        <a href="#about" class="text-gray-600 hover:text-green-700">About Us</a>
        <a href="#gallery" class="text-gray-600 hover:text-green-700">Gallery</a>
        <a href="#contact" class="text-gray-600 hover:text-green-700">Contact</a>
      </nav>
      <button id="mobile-menu-button" class="md:hidden">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
      </button>
    </div>
    <div id="mobile-menu" class="hidden md:hidden px-6 pb-4">
      <a href="#home" class="block py-2 text-gray-600 hover:text-green-700">Home</a>
      <a href="#services" class="block py-2 text-gray-600 hover:text-green-700">Services</a>
      <a href="#about" class="block py-2 text-gray-600 hover:text-green-700">About Us</a>
      <a href="#gallery" class="block py-2 text-gray-600 hover:text-green-700">Gallery</a>
      <a href="#contact" class="block py-2 text-gray-600 hover:text-green-700">Contact</a>
    </div>
  </header>

  <main>
    <!-- Hero -->
    <section id="home" class="hero-bg h-screen bg-cover bg-center flex items-center justify-center">
      <div class="bg-black/40 text-white text-center p-12 rounded-lg max-w-2xl mx-auto">
        <h1 class="text-5xl md:text-6xl font-playfair font-bold mb-4">Experience True Tranquility</h1>
        <p class="text-lg mb-8">Rediscover your inner peace in our oasis of calm. Your journey to relaxation starts here.</p>
        <a href="#contact" class="bg-green-700 hover:bg-green-800 text-white font-bold py-3 px-8 rounded-full transition transform hover:scale-105">Book An Appointment</a>
      </div>
    </section>

    <!-- Services -->
    <section id="services" class="py-20 bg-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-playfair font-bold text-gray-800">Our Signature Services</h2>
          <p class="text-gray-600 mt-4 max-w-2xl mx-auto">We offer a curated selection of treatments designed to rejuvenate your body, mind, and soul.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- service cards same as previous message -->
          <!-- ... six cards here exactly as before ... -->
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about" class="py-20 bg-green-50">
      <div class="container mx-auto px-6 flex flex-col md:flex-row items-center gap-12">
        <div class="md:w-1/2">
          <img src="https://images.unsplash.com/photo-1596178065887-1198b6148b2b?q=80&w=2070&auto=format&fit=crop"
               alt="Spa Interior" class="rounded-lg shadow-xl w-full">
        </div>
        <div class="md:w-1/2">
          <h2 class="text-4xl font-playfair font-bold text-gray-800 mb-4">Your Sanctuary for Wellness</h2>
          <p class="text-gray-600 mb-4 leading-relaxed">
            Welcome to Haven International Spa, where we believe in the power of touch and the art of relaxation. Our mission is to provide a peaceful escape from the demands of everyday life.
          </p>
          <p class="text-gray-600 leading-relaxed">
            We use only the finest natural and organic products, ensuring a treatment that is as kind to the earth as it is to your body.
          </p>
        </div>
      </div>
    </section>

    <!-- Gallery -->
    <section id="gallery" class="py-20 bg-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-playfair font-bold text-gray-800">A Glimpse of Serenity</h2>
          <p class="text-gray-600 mt-4">Explore the calming ambiance of our spa.</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
          <div class="grid gap-4">
            <img class="rounded-lg gallery-img" src="https://images.unsplash.com/photo-1599351548092-93c6918a3646?q=80&w=1974&auto=format&fit=crop" alt="">
            <img class="rounded-lg gallery-img" src="https://images.unsplash.com/photo-1542634239-650c4a48b570?q=80&w=1964&auto=format&fit=crop" alt="">
          </div>
          <div class="grid gap-4">
            <img class="rounded-lg gallery-img" src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?q=80&w=1964&auto=format&fit=crop" alt="">
            <img class="rounded-lg gallery-img" src="https://images.unsplash.com/photo-1507034589631-9433cc6bc453?q=80&w=1968&auto=format&fit=crop" alt="">
          </div>
          <div class="grid gap-4">
            <img class="rounded-lg gallery-img" src="https://images.unsplash.com/photo-1570172619642-3a5e8e3d3a6e?q=80&w=2070&auto=format&fit=crop" alt="">
            <img class="rounded-lg gallery-img" src="https://images.unsplash.com/photo-1600334089648-b0d9d3028269?q=80&w=2070&auto=format&fit=crop" alt="">
          </div>
          <div class="grid gap-4">
            <img class="rounded-lg gallery-img" src="https://images.unsplash.com/photo-1558611002-99c73e25d23c?q=80&w=2070&auto=format&fit=crop" alt="">
            <img class="rounded-lg gallery-img" src="https://images.unsplash.com/photo-1616394584738-FC6e6fb3e190?q=80&w=2070&auto=format&fit=crop" alt="">
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
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
                <label class="block text-gray-700 font-medium mb-2">Full Name</label>
                <input type="text" id="name" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-green-600" placeholder="John Doe" required>
              </div>
              <div>
                <label class="block text-gray-700 font-medium mb-2">Email Address</label>
                <input type="email" id="email" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-green-600" placeholder="johndoe@example.com" required>
              </div>
            </div>
            <div>
              <label class="block text-gray-700 font-medium mb-2">Preferred Service</label>
              <select id="service" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-green-600" required>
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
                <label class="block text-gray-700 font-medium mb-2">Preferred Date</label>
                <input type="date" id="date" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-green-600" required>
              </div>
              <div>
                <label class="block text-gray-700 font-medium mb-2">Preferred Time</label>
                <input type="time" id="time" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-green-600" required>
              </div>
            </div>
            <div class="text-center">
              <button id="send-whatsapp-btn" class="bg-green-700 hover:bg-green-800 text-white font-bold py-3 px-12 rounded-full transition transform hover:scale-105">
                Send Inquiry on WhatsApp
              </button>
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
      <p class="text-gray-400">&copy; <span id="year"></span> Haven International Spa. All Rights Reserved.</p>
    </div>
  </footer>

  <!-- Script -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const preloader = document.getElementById('preloader');
      const forceHide = setTimeout(hidePreloader, 3000);
      window.addEventListener('load', hidePreloader);

      function hidePreloader() {
        clearTimeout(forceHide);
        preloader.style.transition = 'opacity 0.6s ease';
        preloader.style.opacity = '0';
        setTimeout(() => preloader.style.display = 'none', 600);
      }

      // mobile menu toggle
      const btn = document.getElementById('mobile-menu-button');
      const menu = document.getElementById('mobile-menu');
      btn.addEventListener('click', () => menu.classList.toggle('hidden'));

      // year
      document.getElementById('year').textContent = new Date().getFullYear();

      // WhatsApp inquiry
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

        const msg = `Hello! I would like to book an appointment.%0A
Name: ${name}%0A
Email: ${email}%0A
Service: ${service}%0A
Date: ${date}%0A
Time: ${time}`;
        const phone = "1234567890"; // your WhatsApp number
        window.open(`https://wa.me/${phone}?text=${msg}`, '_blank');
      });
    });
  </script>
</body>
</html>