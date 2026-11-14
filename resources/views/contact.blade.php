@extends('master')
@section('title')
Contact us
@stop
@section('content')
<section class="page-intro">
  <div class="wrap">
    <p class="eyebrow">Contact</p>
    <h1>We are easy to reach.</h1>
    <p class="lede">Send a note about the space, or call us directly. We work from Espoo.</p>
  </div>
</section>

<section class="section">
  <div class="wrap contact-layout">
    <div class="contact-aside">
      <div class="map-frame">
        <iframe title="Map of Isännäntie 1, Oulu" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1685.7171179574682!2d25.53866691635066!3d65.0071770504848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4681cd5f9487a443%3A0xc52dd1ca8376813b!2zSXPDpG5uw6RudGllIDEsIDkwMjMwIE91bHU!5e0!3m2!1sen!2sfi!4v1641999546689!5m2!1sen!2sfi" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="text-card">
        <h2>Studio</h2>
        <p><strong>Business ID</strong> 3104904-2</p>
        <p><strong>Address</strong><br>Isännäntie 1b 6<br>Espoo, 02940</p>
        <p>
          <a href="mailto:ebi.inyamaeke@yahoo.com">ebi.inyamaeke@yahoo.com</a><br>
          <a href="mailto:nnejennifer@yahoo.com">nnejennifer@yahoo.com</a>
        </p>
        <p>
          <a href="tel:0451576175">045 157 6175</a><br>
          <a href="tel:0449919299">044 991 9299</a>
        </p>
      </div>
    </div>
    <div class="form-card">
      <h2>Contact form</h2>
      @include('partials.contact-form', ['formId' => 'contactForm'])
    </div>
  </div>
</section>
@stop
