@extends('master')
@section('title')
Services
@stop
@section('content')
<section class="page-intro">
  <div class="wrap">
    <p class="eyebrow">Services</p>
    <h1>Five ways we can help.</h1>
    <p class="lede">Each visit is listed at 32€. Book the one that fits the space, and we will confirm the details with you.</p>
  </div>
</section>

<section class="section">
  <div class="wrap service-list">
    <article class="service-row">
      <img src="{{ asset('images/general-cleaning.jpg') }}" alt="A person cleaning a room">
      <div>
        <div class="service-title">
          <h2>General cleaning</h2>
          <span class="price">32€</span>
        </div>
        <p>Our cleaning system sets us apart. Our customers keep coming back to us, because we provide services that work and keep their homes and apartments clean, right down to the little details. This extensive cleaning system, which we call our Detail-Clean Rotation System, which has been proven to be effective in more than five million cleans!</p>
        <a class="btn" href="{{ url('contact') }}">Book now</a>
      </div>
    </article>

    <article class="service-row">
      <img src="{{ asset('images/office-cleaning.jpg') }}" alt="Office cleaning">
      <div>
        <div class="service-title">
          <h2>Office cleaning</h2>
          <span class="price">32€</span>
        </div>
        <p>Our cleaning system sets us apart. Our customers keep coming back to us, because we provide services that work and keep their homes and apartments clean, right down to the little details. This extensive cleaning system, which we call our Detail-Clean Rotation System, which has been proven to be effective in more than five million cleans!</p>
        <a class="btn" href="{{ url('contact') }}">Book now</a>
      </div>
    </article>

    <article class="service-row">
      <img src="{{ asset('images/window-cleaning.jpg') }}" alt="Window cleaning">
      <div>
        <div class="service-title">
          <h2>Window cleaning</h2>
          <span class="price">32€</span>
        </div>
        <p>We start with a thorough detail-clean throughout your house over the course of the first two cleans. On the first clean, our maid service will thoroughly clean your apartment, with special attention on your kitchen and bathrooms. On the second session, we’ll clean your entire apartment, but this time we’ll provide detail-clean services in your sleeping and living areas. We’ll continue to maintain this detail-clean level throughout your home throughout our next visits by providing deep cleaning services on a rotating basis.</p>
        <a class="btn" href="{{ url('contact') }}">Book now</a>
      </div>
    </article>

    <article class="service-row">
      <img src="{{ asset('images/home-cleaning.jpg') }}" alt="Home cleaning">
      <div>
        <div class="service-title">
          <h2>Home cleaning</h2>
          <span class="price">32€</span>
        </div>
        <p>The experts at The Cleaning Company are committed to providing thorough house cleaning services for our valued customers nationwide. In order to accomplish this goal, we adhere to strict standards that remain consistent across the board. It means every individual hired at a franchise location of Cleaning Company goes through a thorough screening process, and then is trained in every aspect of our home cleaning services. This ensures high-quality service every time.</p>
        <a class="btn" href="{{ url('contact') }}">Book now</a>
      </div>
    </article>

    <article class="service-row">
      <img src="{{ asset('images/shop-cleaning.jpg') }}" alt="Shop cleaning">
      <div>
        <div class="service-title">
          <h2>Shop cleaning</h2>
          <span class="price">32€</span>
        </div>
        <p>Our cleaning system sets us apart. Our customers keep coming back to us, because we provide services that work and keep their homes and apartments clean, right down to the little details. This extensive cleaning system, which we call our Detail-Clean Rotation System, which has been proven to be effective in more than five million cleans!</p>
        <a class="btn" href="{{ url('contact') }}">Book now</a>
      </div>
    </article>
  </div>
</section>
@stop
