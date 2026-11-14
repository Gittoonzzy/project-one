@extends('master')
@section('title')
About us
@stop
@section('content')
<section class="page-hero" style="background-image: url('{{ asset('images/Helsinki.jpg') }}')">
  <div class="hero-shade">
    <div class="wrap">
      <p class="eyebrow">About us</p>
      <h1>Cleaning, done with care.</h1>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap narrow prose">
    <h2>About our company</h2>
    <p>
      Cleaning Company service is a fully integrated janitorial cleaning services company that provides comprehensive, high quality, reliable cleaning solutions to commercial, corporate, industrial and residential clients.
    </p>
    <p>
      Our diligent management and work ethic are central to Cleaning Company service business philosophy and critical to delivering consistent, quality cleaning services. We pride ourselves on making our management accountable to the client through direct access and interaction with our team.
    </p>
  </div>
</section>

<section class="section section-mint">
  <div class="wrap card-grid cards-two">
    <article class="text-card">
      <h2>Our mission</h2>
      <p>Aims to be a national market leader in the provision of cleaning services delivering reliable, quality, cost effective cleaning solutions to our customers.</p>
    </article>
    <article class="text-card">
      <h2>Our values</h2>
      <ul>
        <li><strong>Client oriented.</strong> We serve our clients as if we were serving ourselves. We value their feedback and we use it to improve our work.</li>
        <li><strong>Eco-friendly oriented.</strong> We carefully choose the best and most natural cleaning products that give amazing results.</li>
        <li><strong>Excellence and innovation.</strong> We provide training to our personnel in order to ensure the high standard of service. We stay up-to-date on the latest innovations in eco-friendly products and technologies, allowing us to bring the best in to our clients’ homes.</li>
        <li><strong>Expansion and growth.</strong> We make ourselves known in the community; we create long term relations, while constantly expanding. Therefore, we are always bringing in more people to work for us.</li>
      </ul>
    </article>
  </div>
</section>

<section class="section">
  <div class="wrap guarantee">
    <div>
      <p class="eyebrow">Guarantee</p>
      <h2>If it is not right, tell us.</h2>
    </div>
    <p>
      Cleaning Company strives to provide the highest level of quality, service and value to each and every customer. If you are not completely satisfied with our service, please inform us within 24 hours of your clean so we may resolve the situation.
    </p>
  </div>
</section>
@stop
