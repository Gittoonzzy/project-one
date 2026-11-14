<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ebisonpalvelut | @yield('title', 'Ebison')</title>
  <meta name="description" content="Ebison cleaning company in Espoo. Home, office, window, and shop cleaning.">
  <meta name="keywords" content="Ebison, Cleaning, Finland, Helsinki, Espoo">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,520;9..144,650&family=Outfit:wght@380;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <a class="skip-link" href="#content">Skip to content</a>
  <header class="site-header">
    <a class="brand" href="{{ url('/') }}">
      <span class="brand-mark" aria-hidden="true">E</span>
      <span class="brand-text">
        <strong>Ebison</strong>
        <small>Siivous Palvelut</small>
      </span>
    </a>
    <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-nav">Menu</button>
    <nav id="site-nav" class="site-nav">
      <a class="{{ request()->is('/') || request()->is('home') ? 'is-active' : '' }}" href="{{ url('home') }}">Home</a>
      <a class="{{ request()->is('about') ? 'is-active' : '' }}" href="{{ url('about') }}">About</a>
      <a class="{{ request()->is('services') ? 'is-active' : '' }}" href="{{ url('services') }}">Services</a>
      <a class="{{ request()->is('contact') ? 'is-active' : '' }}" href="{{ url('contact') }}">Contact</a>
    </nav>
  </header>

  <main id="content">
    @yield('content')
  </main>

  <footer class="site-footer">
    <div class="wrap footer-grid">
      <div>
        <p class="footer-brand">Ebison Siivous Palvelut</p>
        <p class="footer-note">Cleaning for homes, offices, and shops in Espoo.</p>
      </div>
      <div>
        <h2>Visit</h2>
        <p>Business ID 3104904-2<br>Isännäntie 1b 6<br>Espoo, 02940</p>
      </div>
      <div>
        <h2>Talk to us</h2>
        <p>
          <a href="mailto:ebi.inyamaeke@yahoo.com">ebi.inyamaeke@yahoo.com</a><br>
          <a href="mailto:nnejennifer@yahoo.com">nnejennifer@yahoo.com</a><br>
          <a href="tel:0451576175">045 157 6175</a> · <a href="tel:0449919299">044 991 9299</a>
        </p>
      </div>
    </div>
    <div class="wrap footer-links">
      <a href="{{ url('home') }}">Home</a>
      <a href="{{ url('about') }}">About</a>
      <a href="{{ url('services') }}">Services</a>
      <a href="{{ url('contact') }}">Contact</a>
    </div>
  </footer>

  <script>
    (function () {
      var toggle = document.querySelector('.nav-toggle');
      var nav = document.getElementById('site-nav');
      if (!toggle || !nav) return;
      toggle.addEventListener('click', function () {
        var open = nav.classList.toggle('is-open');
        toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      });
    })();
  </script>
</body>
</html>
