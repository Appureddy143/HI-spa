<?php
// index.php - single-file, self-contained site for Haven International Spa
// Keep this file at your project root and ensure your Assets/ folder exists with the expected images.
?><!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />

  <!-- ========== SEO ========== -->
  <title>Haven International Spa — Oasis of Tranquility & Wellness</title>
  <meta name="description" content="Haven International Spa offers luxurious massages, aromatherapy, facials and wellness packages to refresh body & mind." />
  <meta name="keywords" content="spa, massage, aromatherapy, facial, relaxation, wellness, Haven International Spa" />
  <meta name="author" content="Haven International Spa" />
  <link rel="canonical" href="https://example.com/" />
  <meta property="og:title" content="Haven International Spa — Oasis of Tranquility" />
  <meta property="og:description" content="Rejuvenate body and soul with our curated spa treatments." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://example.com/" />
  <meta property="og:image" content="Assets/back.png" />
  <meta name="robots" content="index, follow" />

  <!-- CSP: allow inline scripts/styles because this is a single-file offline-first page.
       Images are allowed from same-origin (Assets/) and data URLs. -->
  <meta http-equiv="Content-Security-Policy" content="
    default-src 'self';
    img-src 'self' data:;
    style-src 'self' 'unsafe-inline';
    font-src 'self';
    script-src 'self' 'unsafe-inline';
    frame-ancestors 'none';
  ">

  <!-- Fonts: you can remove these if you want fully offline (local fonts). Kept for design. -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

  <style>
    /* =========================================================
       Corrected & cleaned CSS (keeps all image paths as 'Assets/...')
       ========================================================= */

    :root {
      --bg: #f8fafc;
      --text: #1f2937;
      --muted: #6b7280;
      --accent: #166534;
      --card: #ffffff;
      --glass: rgba(255, 255, 255, 0.75);
    }

    .dark {
      --bg: #0b1220;
      --text: #e6eef6;
      --muted: #94a3b8;
      --accent: #4ade80;
      --card: #0f1724;
      --glass: rgba(15, 23, 36, 0.6);
    }

    /* Reset-ish */
    * { box-sizing: border-box; }
    html, body { height: 100%; }
    body {
      margin: 0;
      background: var(--bg);
      color: var(--text);
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      line-height: 1.5;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    /* Header */
    header.site-header {
      position: fixed;
      left: 0;
      right: 0;
      top: 0;
      z-index: 60;
      background: var(--glass);
      backdrop-filter: blur(6px);
      box-shadow: 0 2px 8px rgba(2, 6, 23, 0.06);
    }
    .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
    .header-inner { display: flex; align-items: center; justify-content: space-between; height: 64px; }
    .brand { display:flex; align-items:center; gap:12px; text-decoration:none; color:var(--text); }
    .brand img { width:36px; height:36px; border-radius:8px; object-fit:cover; }
    .brand h1 { font-family:"Playfair Display", serif; margin:0; font-size:18px; font-weight:700; }

    nav.desktop { display:flex; gap:18px; align-items:center; }
    nav.desktop a { color:var(--muted); text-decoration:none; font-weight:500; transition: color .2s ease; }
    nav.desktop a:hover { color:var(--accent); }

    /* Mobile controls */
    .controls { display:flex; gap:10px; align-items:center; }
    #menuToggle, #themeToggle { background:none; border:0; cursor:pointer; font-size:18px; padding:6px; color:var(--text); }
    #menuToggle:hover, #themeToggle:hover { color:var(--accent); transform:scale(1.05); }
    #menuToggle { display:none; } /* shown on small screens by media query */

    /* Hero (uses local Assets/back.png) */
    .hero {
      height: 100vh;
      display:flex;
      align-items:center;
      justify-content:center;
      padding:40px;
      background-image: url('Assets/back.png');
      background-size: cover;
      background-position: center;
    }
    .hero-card {
      max-width:920px;
      background:rgba(0,0,0,0.45);
      padding:48px;
      border-radius:14px;
      color:#fff;
      text-align:center;
      backdrop-filter: blur(2px);
      box-shadow:0 10px 30px rgba(2,6,23,0.35);
    }
    .hero-card h2 { font-family:"Playfair Display",serif; font-size:44px; margin:0 0 12px; }
    .hero-card p { margin:0 0 20px; color:rgba(255,255,255,0.9); font-size:16px; }
    .btn { display:inline-block; background:var(--accent); color:white; padding:12px 24px; border-radius:999px; text-decoration:none; font-weight:700; transition: transform .18s ease, box-shadow .18s; }
    .btn:hover { transform:translateY(-4px); box-shadow:0 12px 30px rgba(22,101,52,0.18); }

    /* Sections */
    section { padding:64px 0; }
    .section-title { font-family:"Playfair Display", serif; font-size:28px; margin:0 0 8px; }
    .muted { color:var(--muted); }
    .grid { display:grid; gap:20px; }

    /* Services */
    .services-grid { grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); display:grid; gap:20px; }
    .card { background:var(--card); border-radius:12px; overflow:hidden; box-shadow:0 6px 20px rgba(2,6,23,0.06); transition: transform .3s ease, box-shadow .3s ease; }
    .card:hover { transform:translateY(-6px); box-shadow:0 8px 25px rgba(2,6,23,0.12); }
    .card img { width:100%; height:180px; object-fit:cover; display:block; }
    .card .card-body { padding:16px; }
    .card h3 { margin:0 0 8px; font-size:18px; }
    .card p { margin:0; color:var(--muted); font-size:14px; }

    /* Gallery (local images) */
    .gallery-grid { display:grid; gap:12px; grid-template-columns: repeat(4, 1fr); }
    .gallery-grid .col { display:grid; gap:12px; }
    .gallery-grid img { width:100%; height:auto; border-radius:10px; display:block; transition: transform 0.35s ease; }
    .gallery-grid img:hover { transform: scale(1.03); }

    /* Contact form */
    .form { background:var(--card); padding:24px; border-radius:12px; box-shadow:0 8px 26px rgba(2,6,23,0.06); }
    .row { display:grid; grid-template-columns:repeat(2,1fr); gap:12px; }
    .field { display:flex; flex-direction:column; gap:8px; }
    input[type="text"], input[type="email"], input[type="date"], input[type="time"], select { padding:10px; border-radius:8px; border:1px solid #e6e7eb; background:transparent; color:var(--text); }

    /* Footer */
    footer { padding:40px 0; text-align:center; background:transparent; color:var(--muted); }

    /* Floating FABs */
    .fab-wrap { position:fixed; right:18px; bottom:18px; display:flex; flex-direction:column; gap:12px; z-index:80; }
    .fab { width:56px; height:56px; border-radius:999px; display:flex; align-items:center; justify-content:center; color:white; text-decoration:none; box-shadow:0 10px 24px rgba(2,6,23,0.12); transition: transform .14s; }
    .fab:active { transform:scale(.98); }
    .fab.wh { background:#25D366; } /* WhatsApp */
    .fab.call { background:#0ea5e9; } /* Call */

    /* Mobile menu */
    #mobileMenu {
      background: var(--card);
      border-radius: 10px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      position: absolute;
      top: 60px;
      right: 20px;
      width: 220px;
      padding: 12px 18px;
      z-index: 999;
      opacity: 0;
      transform: translateY(-15px);
      pointer-events: none;
      transition: opacity .28s ease, transform .28s ease;
    }
    #mobileMenu.active { opacity:1; transform: translateY(0); pointer-events: all; }
    #mobileMenu a { display:block; padding:10px 0; color:var(--text); text-decoration:none; font-weight:500; transition: color .2s ease, transform .2s ease; }
    #mobileMenu a:hover { color:var(--accent); transform: translateX(6px); }
    body.dark #mobileMenu { background:#1e1e1e; }
    body.dark #mobileMenu a { color:#f1f1f1; }

    /* Preloader */
    #preloader { position:fixed; inset:0; display:flex; align-items:center; justify-content:center; flex-direction:column; background:var(--card); z-index:9999; }
    .spinner { width:96px; height:96px; border-radius:50%; display:inline-block; position:relative; box-shadow: inset 0 0 0 6px rgba(22,101,52,0.08); }
    .spinner::after { content:""; position:absolute; inset:12px; border-radius:50%; border:6px solid transparent; border-top-color:var(--accent); animation:spin 1.1s linear infinite; }
    @keyframes spin { to { transform:rotate(360deg); } }

    /* utilities */
    .text-center { text-align:center; } .mb-4{ margin-bottom:16px } .mb-6{ margin-bottom:24px } .mt-4{ margin-top:16px }

    /* reveal on scroll */
    .reveal { opacity:0; transform: translateY(14px); transition: opacity .6s ease, transform .6s ease; }
    .reveal.in-view { opacity:1; transform:none; }

    /* responsive */
    @media (max-width:900px) {
      .row { grid-template-columns: 1fr; }
      .gallery-grid { grid-template-columns: repeat(2, 1fr); }
      nav.desktop { display:none; }
      #menuToggle { display:inline-block; }
    }
  </style>
</head>
<body>

  <!-- PRELOADER -->
  <div id="preloader" aria-hidden="false">
    <div class="spinner" role="img" aria-label="Loading"></div>
    <div style="margin-top:12px;font-family:'Playfair Display',serif;color:var(--accent);font-size:16px">Preparing your oasis...</div>
  </div>

  <!-- HEADER -->
  <header class="site-header" role="banner">
    <div class="container">
      <div class="header-inner">
        <a class="brand" href="#">
          <img src="Assets/logo.png" alt="Haven logo" loading="lazy">
          <h1>Haven International Spa</h1>
        </a>

        <nav class="desktop" aria-label="Main navigation">
          <a href="#home">Home</a>
          <a href="#services">Services</a>
          <a href="#about">About</a>
          <a href="#gallery">Gallery</a>
          <a href="#contact">Contact</a>
        </nav>

        <div class="controls">
          <button id="themeToggle" title="Toggle dark mode" aria-label="Toggle dark mode">🌙</button>
          <button id="menuToggle" title="Open menu" aria-label="Open menu">☰</button>
        </div>
      </div>
    </div>

    <!-- mobile menu -->
    <div id="mobileMenu" role="menu" aria-hidden="true">
      <a href="#home" role="menuitem">Home</a>
      <a href="#services" role="menuitem">Services</a>
      <a href="#about" role="menuitem">About</a>
      <a href="#gallery" role="menuitem">Gallery</a>
      <a href="#contact" role="menuitem">Contact</a>
    </div>
  </header>

  <!-- MAIN -->
  <main>
    <!-- HERO -->
    <section id="home" class="hero" aria-label="Hero">
      <div class="hero-card reveal">
        <h2>Experience True Tranquility</h2>
        <p>Rediscover your inner peace in our oasis of calm. Your journey to relaxation starts here.</p>
        <a class="btn" href="#contact">Book An Appointment</a>
      </div>
    </section>

    <!-- SERVICES -->
    <section id="services" aria-label="Services">
      <div class="container">
        <div class="text-center mb-6">
          <h3 class="section-title">Our Signature Services</h3>
          <p class="muted">We offer a curated selection of treatments designed to rejuvenate your body, mind, and soul.</p>
        </div>

        <div class="services-grid">
          <!-- Use local service images (keep paths intact) -->
          <article class="card reveal">
            <img src="Assets/s1.png" alt="Swedish Massage" loading="lazy">
            <div class="card-body"><h3>Swedish Massage</h3><p>A classic relaxing massage to ease muscle tension and improve circulation.</p></div>
          </article>

          <article class="card reveal">
            <img src="Assets/s2.png" alt="Aromatherapy" loading="lazy">
            <div class="card-body"><h3>Aromatherapy</h3><p>Uses essential oils to promote healing and a feeling of well-being.</p></div>
          </article>

          <article class="card reveal">
            <img src="Assets/s3.png" alt="Hot Stone Therapy" loading="lazy">
            <div class="card-body"><h3>Hot Stone Therapy</h3><p>Heated stones are placed on the body to soothe muscles and relieve stress.</p></div>
          </article>

          <article class="card reveal">
            <img src="Assets/s4.png" alt="Deep Tissue Massage" loading="lazy">
            <div class="card-body"><h3>Deep Tissue Massage</h3><p>Targets deeper layers of muscle to release chronic knots and tension.</p></div>
          </article>

          <article class="card reveal">
            <img src="Assets/s5.png" alt="Rejuvenating Facial" loading="lazy">
            <div class="card-body"><h3>Rejuvenating Facial</h3><p>A custom facial to cleanse, exfoliate, and nourish the skin for a radiant glow.</p></div>
          </article>

          <article class="card reveal">
            <img src="Assets/s6.png" alt="Couples Package" loading="lazy">
            <div class="card-body"><h3>Couples Package</h3><p>Enjoy a relaxing massage side-by-side with a partner in our private suite.</p></div>
          </article>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section id="about" style="background:rgba(20,83,45,0.04);">
      <div class="container" style="display:grid;grid-template-columns:1fr 1fr;gap:28px;align-items:center;">
        <div class="reveal"><img src="Assets/g1.png" alt="Spa interior" style="width:100%;border-radius:12px;display:block;"></div>
        <div class="reveal">
          <h3 class="section-title">Your Sanctuary for Wellness</h3>
          <p class="muted">Welcome to Haven International Spa, where we believe in the power of touch and the art of relaxation. Our mission is to provide a peaceful escape from the demands of everyday life.</p>
          <p class="muted">We use only the finest natural and organic products, ensuring a treatment that is as kind to the earth as it is to your body.</p>
        </div>
      </div>
    </section>

    <!-- GALLERY -->
    <section id="gallery">
      <div class="container">
        <div class="text-center mb-6">
          <h3 class="section-title">A Glimpse of Serenity</h3>
          <p class="muted">Explore the calming ambiance of our spa.</p>
        </div>

        <div class="gallery-grid">
          <div class="col reveal">
            <img src="Assets/g1.png" alt="Gallery image 1" loading="lazy">
            <img src="Assets/g2.png" alt="Gallery image 2" loading="lazy">
          </div>
          <div class="col reveal">
            <img src="Assets/g3.png" alt="Gallery image 3" loading="lazy">
            <img src="Assets/g4.png" alt="Gallery image 4" loading="lazy">
          </div>
          <div class="col reveal">
            <img src="Assets/g5.png" alt="Gallery image 5" loading="lazy">
            <img src="Assets/g6.png" alt="Gallery image 6" loading="lazy">
          </div>
          <div class="col reveal">
            <img src="Assets/g2.png" alt="Gallery extra" loading="lazy">
            <img src="Assets/g1.png" alt="Gallery extra 2" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <!-- CONTACT -->
    <section id="contact">
      <div class="container">
        <div class="text-center mb-6">
          <h3 class="section-title">Book Your Escape</h3>
          <p class="muted">We're ready to help you begin your journey to relaxation. Contact us today.</p>
        </div>

        <div style="max-width:900px;margin:0 auto" class="reveal">
          <div class="form">
            <div class="row" style="margin-bottom:14px">
              <div class="field">
                <label for="name">Full Name</label>
                <input id="name" type="text" placeholder="John Doe">
              </div>
              <div class="field">
                <label for="email">Email Address</label>
                <input id="email" type="email" placeholder="johndoe@example.com">
              </div>
            </div>

            <div style="margin-bottom:14px">
              <label for="service">Preferred Service</label>
              <select id="service">
                <option value="">Select a service</option>
                <option>Swedish Massage</option>
                <option>Aromatherapy</option>
                <option>Hot Stone Therapy</option>
                <option>Deep Tissue Massage</option>
                <option>Rejuvenating Facial</option>
                <option>Couples Package</option>
              </select>
            </div>

            <div class="row" style="margin-bottom:14px">
              <div class="field">
                <label for="date">Preferred Date</label>
                <input id="date" type="date">
              </div>
              <div class="field">
                <label for="time">Preferred Time</label>
                <input id="time" type="time">
              </div>
            </div>

            <div style="text-align:center;margin-top:8px">
              <button id="sendWhatsapp" class="btn">Send Inquiry on WhatsApp</button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <footer>
    <div class="container">
      <p style="font-family:'Playfair Display',serif;font-size:20px;margin:0 0 12px">Haven International Spa</p>
      <div style="margin-bottom:12px">
        <a href="#" style="margin-right:16px;color:var(--muted)">Facebook</a>
        <a href="#" style="margin-right:16px;color:var(--muted)">Instagram</a>
        <a href="#" style="color:var(--muted)">Twitter</a>
      </div>
      <div style="color:var(--muted)">&copy; <span id="year"></span> Haven International Spa. All Rights Reserved.</div>
    </div>
  </footer>

  <!-- FLOATING ACTION BUTTONS -->
  <div class="fab-wrap" aria-hidden="false">
    <a class="fab wh" id="whatsappFab" href="https://wa.me/919108238201" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
      <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.891-11.893 11.891-1.996 0-3.903-.52-5.586-1.455L.057 24zM6.591 19.911l.3.181c1.559.936 3.303 1.428 5.109 1.428 5.462 0 9.904-4.443 9.904-9.904 0-5.461-4.442-9.904-9.904-9.904-5.461 0-9.904 4.443-9.904 9.904 0 1.84.49 3.582 1.396 5.093l.203.341-1.015 3.714 3.79-1.003z"/></svg>
    </a>

    <a class="fab call" id="callFab" href="tel:+919108238201" aria-label="Call Us">
      <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12 1.05.36 2.08.72 3.07a2 2 0 0 1-.45 2.11L8.09 10.91a16 16 0 0 0 6 6l1.01-1.01a2 2 0 0 1 2.11-.45c.99.36 2.02.6 3.07.72A2 2 0 0 1 22 16.92z"/></svg>
    </a>
  </div>

  <!-- SCRIPTS -->
  <script>
    (function () {
      // Basic elements
      const preloader = document.getElementById('preloader');
      const menuToggle = document.getElementById('menuToggle');
      const mobileMenu = document.getElementById('mobileMenu');
      const themeToggle = document.getElementById('themeToggle');
      const sendWhatsapp = document.getElementById('sendWhatsapp');
      const yearEl = document.getElementById('year');

      // Phone
      const phoneFull = '919108238201'; // +91 9108238201 (no plus in wa.me)

      // Year
      if (yearEl) yearEl.textContent = new Date().getFullYear();

      // PRELOADER: hide on load or after 2500ms failsafe
      let hasHiddenPreloader = false;
      function hidePreloader() {
        if (hasHiddenPreloader) return;
        hasHiddenPreloader = true;
        if (preloader) {
          preloader.style.transition = 'opacity .45s ease';
          preloader.style.opacity = '0';
          setTimeout(() => { preloader.style.display = 'none'; }, 480);
        }
      }
      window.addEventListener('load', hidePreloader);
      setTimeout(hidePreloader, 2500);

      // MOBILE MENU: toggle
      if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', () => {
          const active = mobileMenu.classList.toggle('active');
          mobileMenu.setAttribute('aria-hidden', active ? 'false' : 'true');
        });
        // auto-close on link click
        mobileMenu.querySelectorAll('a').forEach(a => {
          a.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            mobileMenu.setAttribute('aria-hidden', 'true');
          });
        });
      }

      // THEME: dark/light toggle stored in localStorage
      const THEME_KEY = 'haven_dark_mode_v1';
      function applyThemeFromStorage() {
        try {
          const v = localStorage.getItem(THEME_KEY);
          if (v === '1') {
            document.documentElement.classList.add('dark');
            themeToggle.textContent = '☀️';
          } else {
            document.documentElement.classList.remove('dark');
            themeToggle.textContent = '🌙';
          }
        } catch (e) {
          // ignore
        }
      }
      applyThemeFromStorage();
      if (themeToggle) {
        themeToggle.addEventListener('click', () => {
          const isDark = document.documentElement.classList.toggle('dark');
          try { localStorage.setItem(THEME_KEY, isDark ? '1' : '0'); } catch(e){}
          themeToggle.textContent = isDark ? '☀️' : '🌙';
        });
      }

      // Reveal on scroll (IntersectionObserver)
      const io = new IntersectionObserver((entries) => {
        entries.forEach(en => {
          if (en.isIntersecting) {
            en.target.classList.add('in-view');
            io.unobserve(en.target);
          }
        });
      }, { threshold: 0.12 });
      document.querySelectorAll('.reveal').forEach(el => io.observe(el));

      // WhatsApp send from form
      if (sendWhatsapp) {
        sendWhatsapp.addEventListener('click', () => {
          const name = document.getElementById('name')?.value?.trim() || '';
          const email = document.getElementById('email')?.value?.trim() || '';
          const service = document.getElementById('service')?.value || '';
          const date = document.getElementById('date')?.value || '';
          const time = document.getElementById('time')?.value || '';

          if (!name || !email || !service || !date || !time) {
            alert('Please fill all fields before sending.');
            return;
          }

          // prepare message (simple URL encoded)
          const message = `Hello Haven International Spa,%0A%0AI'd like to book an appointment.%0A%0A*Name:* ${encodeURIComponent(name)}%0A*Email:* ${encodeURIComponent(email)}%0A*Service:* ${encodeURIComponent(service)}%0A*Date:* ${encodeURIComponent(date)}%0A*Time:* ${encodeURIComponent(time)}%0A%0APlease confirm.`;
          const url = `https://wa.me/${phoneFull}?text=${message}`;
          window.open(url, '_blank');
        });
      }

      // Accessibility: pressing ESC closes mobile menu
      window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
          if (mobileMenu) { mobileMenu.classList.remove('active'); mobileMenu.setAttribute('aria-hidden', 'true'); }
        }
      });

      // Register a Service Worker using a blob (self-contained, no extra file)
      if ('serviceWorker' in navigator) {
        try {
          const swCode = `
            const CACHE_NAME = 'haven-spa-cache-v1';
            const OFFLINE_URL = '/';
            self.addEventListener('install', event => {
              self.skipWaiting();
              event.waitUntil(
                caches.open(CACHE_NAME).then(cache => {
                  // Cache core assets (attempt to cache Assets/ images if available)
                  return cache.addAll([
                    '/',
                    '/index.php',
                    'Assets/back.png',
                    'Assets/logo.png',
                    'Assets/g1.png','Assets/g2.png','Assets/g3.png','Assets/g4.png','Assets/g5.png','Assets/g6.png',
                    'Assets/s1.png','Assets/s2.png','Assets/s3.png','Assets/s4.png','Assets/s5.png','Assets/s6.png'
                  ].filter(Boolean).map(u => u));
                })
              );
            });

            self.addEventListener('fetch', event => {
              event.respondWith(
                caches.match(event.request).then(response => {
                  return response || fetch(event.request).then(fetchRes => {
                    try {
                      const cloned = fetchRes.clone();
                      caches.open(CACHE_NAME).then(cache => {
                        // Only cache GET requests and same-origin images/html
                        if (event.request.method === 'GET') {
                          cache.put(event.request, cloned);
                        }
                      });
                    } catch (e) {}
                    return fetchRes;
                  }).catch(() => {
                    // fallback: return cached root or offline image
                    return caches.match('/index.php');
                  });
                })
              );
            });

            self.addEventListener('activate', event => {
              event.waitUntil(
                caches.keys().then(keys => Promise.all(keys.map(k => { if (k !== CACHE_NAME) return caches.delete(k); })))
              );
            });
          `;
          const blob = new Blob([swCode], { type: 'application/javascript' });
          const swUrl = URL.createObjectURL(blob);
          navigator.serviceWorker.register(swUrl).catch(()=>{ /* ignore */ });
        } catch (e) {
          // ignore registration errors
        }
      }

      // Extra: ensure preloader can be dismissed by user interaction if stuck
      function userDismiss() { hidePreloader(); window.removeEventListener('click', userDismiss); window.removeEventListener('keydown', userDismiss); }
      window.addEventListener('click', userDismiss);
      window.addEventListener('keydown', userDismiss);
    })();
  </script>
</body>
</html>

