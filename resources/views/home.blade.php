@extends('master')
@section('title')
Home
@stop
@section('content')
<section class="hero" style="background-image: url('{{ asset('images/home.jpg') }}')">
  <div class="hero-shade">
    <div class="wrap hero-copy">
      <p class="eyebrow">Espoo · cleaning you can rely on</p>
      <h1>A calmer home, a clearer office.</h1>
      <p class="lede">Ebison Siivous Palvelut looks after homes, windows, offices, and shops with the same careful standard on every visit.</p>
      <div class="hero-actions">
        <a class="btn" href="{{ url('services') }}">See services</a>
        <a class="btn btn-ghost" href="{{ url('contact') }}">Request a clean</a>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap split">
    <div>
      <p class="eyebrow">About our company</p>
      <h2>Care in the details.</h2>
    </div>
    <div class="prose">
      <p>
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
      </p>
      <p>
        From a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "L
      </p>
      <a class="text-link" href="{{ url('about') }}">More about us</a>
    </div>
  </div>
</section>

<section class="section section-mint" id="services">
  <div class="wrap">
    <div class="section-head">
      <p class="eyebrow">Services</p>
      <h2>What we take care of</h2>
    </div>
    <div class="card-grid">
      <a class="photo-card" href="{{ url('services') }}">
        <img src="{{ asset('images/window1.jpg') }}" alt="Window cleaning">
        <span>Window cleaning</span>
      </a>
      <a class="photo-card" href="{{ url('services') }}">
        <img src="{{ asset('images/home.jpg') }}" alt="Home cleaning">
        <span>Home cleaning</span>
      </a>
      <a class="photo-card" href="{{ url('services') }}">
        <img src="{{ asset('images/pic2.jpg') }}" alt="Office cleaning">
        <span>Office cleaning</span>
      </a>
    </div>
  </div>
</section>

<section class="section" id="reviews">
  <div class="wrap">
    <div class="section-head">
      <p class="eyebrow">Reviews</p>
      <h2>What clients say</h2>
    </div>
    <div class="card-grid">
      <blockquote class="quote-card">
        <p>Pidän palvelusta.</p>
        <footer>Anonymous</footer>
      </blockquote>
      <blockquote class="quote-card">
        <p>The cleaning service helped me so much in time of my exams.</p>
        <footer>Student</footer>
      </blockquote>
      <blockquote class="quote-card">
        <p>Suosittelen palvelua ehdottomasti!</p>
        <footer>Anonymous</footer>
      </blockquote>
    </div>
  </div>
</section>

<section class="section section-contact" id="contact">
  <div class="wrap contact-panel">
    <div>
      <p class="eyebrow">Contact us</p>
      <h2>Tell us what needs cleaning.</h2>
      <p class="lede">Isännäntie 1b 6, Espoo 02940. Call 045 157 6175 or leave a message and we will get back to you.</p>
    </div>
    <div class="form-card">
      @include('partials.contact-form', ['formId' => 'homeForm'])
    </div>
  </div>
</section>
@stop
