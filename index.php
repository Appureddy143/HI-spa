<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Security-Policy" content="
      default-src 'self';
      script-src 'self' https://cdn.tailwindcss.com;
      style-src 'self' https://fonts.googleapis.com 'unsafe-inline';
      font-src 'self' https://fonts.gstatic.com;
      img-src 'self' data: blob: https://images.unsplash.com https://placehold.co https://i.gifer.com https://cdn.dribbble.com;
  ">
  <title>Haven International Spa - Your Oasis of Tranquility</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

  <style>
    body { font-family: 'Inter', sans-serif; margin: 0; padding: 0; }
    .font-playfair { font-family: 'Playfair Display', serif; }

    /* 🌿 Preloader */
    #preloader {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background-color: #ffffff;
      display: flex; flex-direction: column;
      align-items: center; justify-content: center;
      z-index: 9999;
      transition: opacity 0.5s ease-out;
    }

    #preloader img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 16px;
    }

    #preloader p {
      font-family: 'Playfair Display', serif;
      font-size: 1.25rem;
      color: #166534;
      animation: fadeIn 1.5s ease-in-out infinite alternate;
    }

    @keyframes fadeIn {
      from { opacity: 0.4; }
      to { opacity: 1; }
    }

    /* Hero background */
    .hero-bg {
      background-image: url('https://images.unsplash.com/photo-1544161515-cfd696dba485?q=80&w=2070&auto=format&fit=crop');
      background-size: cover;
      background-position: center;
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

  <!-- 🌿 Preloader -->
  <div id="preloader">
    <img src="https://i.gifer.com/ZZ5H.gif" alt="Spa Loading Animation">
    <p>Preparing Your Oasis...</p>
  </div>

  <!-- ✅ Header -->
  <header id="header" class="bg-white/80 backdrop-blur-md fixed top-0 left-0 right-0 z-50 shadow-sm">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <a href="#" class="flex items-center gap-3 text-2xl font-playfair font-bold text-gray-800">
        <img src="https://placehold.co/32x32/166534/ffffff?text=H" alt="Haven Logo" class="h-8 w-8 rounded-full">
        <span>Haven International Spa</span>
      </a>
      <nav class="hidden md:flex space-x-8">
        <a href="#home" class="text-gray-600 hover:text-green-700 transition duration-300">Home</a>
        <a href="#services" class="text-gray-600 hover:text-green-700 transition duration-300">Services</a>
        <a href="#about" class="text-gray-600 hover:text-green-700 transition duration-300">About</a>
        <a href="#gallery" class="text-gray-600 hover:text-green-700 transition duration-300">Gallery</a>
        <a href="#contact" class="text-gray-600 hover:text-green-700 transition duration-300">Contact</a>
      </nav>
      <button id="mobile-menu-button" class="md:hidden">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
      </button>
    </div>
    <div id="mobile-menu" class="hidden md:hidden px-6 pb-4">
      <a href="#home" class="block py-2 text-gray-600 hover:text-green-700">Home</a>
      <a href="#services" class="block py-2 text-gray-600 hover:text-green-700">Services</a>
      <a href="#about" class="block py-2 text-gray-600 hover:text-green-700">About</a>
      <a href="#gallery" class="block py-2 text-gray-600 hover:text-green-700">Gallery</a>
      <a href="#contact" class="block py-2 text-gray-600 hover:text-green-700">Contact</a>
    </div>
  </header>

  <!-- ✅ Hero -->
  <section id="home" class="hero-bg h-screen flex items-center justify-center">
    <div class="bg-black/40 text-white text-center p-12 rounded-lg max-w-2xl mx-auto">
      <h1 class="text-5xl md:text-6xl font-playfair font-bold mb-4">Experience True Tranquility</h1>
      <p class="text-lg mb-8">Rediscover your inner peace in our oasis of calm.</p>
      <a href="#contact" class="bg-green-700 hover:bg-green-800 text-white font-bold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105">Book Now</a>
    </div>
  </section>

  <!-- ✅ Services (shortened for clarity) -->
  <section id="services" class="py-20 bg-white">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-playfair font-bold text-center mb-6">Our Signature Services</h2>
      <p class="text-gray-600 text-center mb-12">Rejuvenate your body, mind, and soul.</p>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden">
          <img src="https://images.unsplash.com/photo-1512290923902-8a9f31c83659?q=80&w=2070&auto=format&fit=crop" class="h-48 w-full object-cover">
          <div class="p-6"><h3 class="text-xl font-bold mb-2">Swedish Massage</h3><p class="text-gray-600">A relaxing massage to ease tension and improve circulation.</p></div>
        </div>
        <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden">
          <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?q=80&w=2070&auto=format&fit=crop" class="h-48 w-full object-cover">
          <div class="p-6"><h3 class="text-xl font-bold mb-2">Aromatherapy</h3><p class="text-gray-600">Essential oils to promote healing and well-being.</p></div>
        </div>
        <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden">
          <img src="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?q=80&w=1974&auto=format&fit=crop" class="h-48 w-full object-cover">
          <div class="p-6"><h3 class="text-xl font-bold mb-2">Hot Stone Therapy</h3><p class="text-gray-600">Heated stones soothe muscles and relieve stress.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ Footer -->
  <footer class="bg-gray-800 text-white py-12 text-center">
    <p class="text-2xl font-playfair font-bold mb-2">Haven International Spa</p>
    <p class="text-gray-400">&copy; <span id="year"></span> Haven International Spa</p>
  </footer>

  <!-- ✅ Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const preloader = document.getElementById('preloader');
      let preloaderHidden = false;

      function hidePreloader() {
        if (!preloaderHidden) {
          preloaderHidden = true;
          preloader.style.opacity = '0';
          setTimeout(() => preloader.style.display = 'none', 500);
        }
      }

      window.addEventListener('load', hidePreloader);
      setTimeout(hidePreloader, 3000);
      document.getElementById('year').textContent = new Date().getFullYear();
    });
  </script>

</body>
</html>