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
      img-src 'self' data: blob: https://images.unsplash.com https://placehold.co;
  ">
  <title>Haven International Spa</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

  <style>
    body { font-family: 'Inter', sans-serif; margin:0; padding:0; }
    .font-playfair { font-family: 'Playfair Display', serif; }

    /* ✅ Preloader */
    #preloader {
      position: fixed;
      top: 0; left: 0; width: 100%; height: 100%;
      background: white;
      display: flex; justify-content: center; align-items: center;
      z-index: 9999;
      transition: opacity 0.5s ease-out;
    }
    #preloader img { width: 100px; height: 100px; object-fit: contain; }

    /* ✅ Hero background */
    .hero-bg {
      background-image: url('https://images.unsplash.com/photo-1544161515-cfd696dba485?q=80&w=2070&auto=format&fit=crop');
      background-size: cover;
      background-position: center;
    }
  </style>
</head>

<body class="bg-gray-50 text-gray-800">

  <!-- ✅ Preloader -->
  <div id="preloader">
    <img src="assets/images/loader.gif" alt="Loading..." />
  </div>

  <!-- ✅ Page Content -->
  <header class="bg-white/80 backdrop-blur-md fixed top-0 left-0 right-0 z-50 shadow-sm">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <a href="#" class="flex items-center gap-3 text-2xl font-playfair font-bold text-gray-800">
        <img src="https://placehold.co/32x32/166534/ffffff?text=H" class="h-8 w-8 rounded-full">
        <span>Haven International Spa</span>
      </a>
    </div>
  </header>

  <main>
    <section id="home" class="hero-bg h-screen flex items-center justify-center">
      <div class="bg-black/40 text-white text-center p-12 rounded-lg max-w-2xl mx-auto">
        <h1 class="text-5xl md:text-6xl font-playfair font-bold mb-4">
          Experience True Tranquility
        </h1>
        <p class="text-lg mb-8">Rediscover your inner peace in our oasis of calm.</p>
        <a href="#contact" class="bg-green-700 hover:bg-green-800 py-3 px-8 rounded-full text-white font-bold">Book An Appointment</a>
      </div>
    </section>

    <section id="services" class="py-20 bg-white">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-playfair font-bold mb-6">Our Signature Services</h2>
        <p class="text-gray-600 mb-12">A curated selection of treatments designed to rejuvenate your body and soul.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-gray-100 p-6 rounded-lg shadow">
            <img src="https://images.unsplash.com/photo-1512290923902-8a9f31c83659?q=80&w=2070&auto=format&fit=crop" class="rounded-lg mb-4 h-48 w-full object-cover">
            <h3 class="text-xl font-bold mb-2">Swedish Massage</h3>
            <p class="text-gray-600">A classic relaxing massage to ease muscle tension and improve circulation.</p>
          </div>
          <div class="bg-gray-100 p-6 rounded-lg shadow">
            <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?q=80&w=2070&auto=format&fit=crop" class="rounded-lg mb-4 h-48 w-full object-cover">
            <h3 class="text-xl font-bold mb-2">Aromatherapy</h3>
            <p class="text-gray-600">Uses essential oils to promote healing and a feeling of well-being.</p>
          </div>
          <div class="bg-gray-100 p-6 rounded-lg shadow">
            <img src="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?q=80&w=1974&auto=format&fit=crop" class="rounded-lg mb-4 h-48 w-full object-cover">
            <h3 class="text-xl font-bold mb-2">Hot Stone Therapy</h3>
            <p class="text-gray-600">Heated stones are placed on the body to soothe muscles and relieve stress.</p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="bg-gray-800 text-white py-12 text-center">
    <p class="text-2xl font-playfair font-bold mb-2">Haven International Spa</p>
    <p class="text-gray-400">&copy; <span id="year"></span> Haven International Spa</p>
  </footer>

  <!-- ✅ Working JS -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const preloader = document.getElementById('preloader');
      let preloaderHidden = false;

      function hidePreloader() {
        if (!preloaderHidden) {
          preloaderHidden = true;
          preloader.style.opacity = '0';
          setTimeout(() => { preloader.style.display = 'none'; }, 500);
        }
      }

      // Hide preloader when page fully loads
      window.addEventListener('load', hidePreloader);
      // Failsafe - hide preloader after 3s
      setTimeout(hidePreloader, 3000);

      // Year auto-update
      const yearSpan = document.getElementById('year');
      if (yearSpan) yearSpan.textContent = new Date().getFullYear();
    });
  </script>

</body>
</html>