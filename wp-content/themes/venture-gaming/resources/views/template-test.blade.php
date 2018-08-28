{{--
  Template Name: Home-2 Template
--}}

@extends('layouts.app')

@section('content')
  <section class="hero">
    <video class="hero__video" autoplay muted loop>
      <source src="/wp-content/themes/venture-gaming/dist/images/slots-hero.mp4" type="video/mp4">

    </video>
    <div class="hero__overlay"></div>
    <div class="l-container hero__content">
        <img class="hero__logo" src="/wp-content/themes/venture-gaming/dist/images/venture-gaming-logo-full-color.png" alt="">
        <h2 class="hero__title">
        Your Pennsylvania Gaming Partner
        </h2>
    </div>
  </section>
  <section class="contact">
    <div class="l-container l-container--grid">
      <div class="l-split">
       <h2>Let’s Get Started!</h2>
      <h5>You can’t wait to get the right video-gaming machines in place—and neither can your customers. We can help. Be ready to launch with a fully licensed and certified operator when Pennsylvania gives us both the go-ahead. </h5>
      <p>Even better, Venture Gaming is owned and operated by lifelong Pennsylvanians. We are committed to making your business a winner! </p>
      <p>Learn who we are by completing and submitting the form or by calling Brent Mayes at 724-333-4055.</p>
      <h4>What else?</h4>
      <p>Complete the licensing “paperwork” here: <a href="https://gamingcontrolboard.pa.gov/?p=289">Video Gaming Terminal (VGT) Applications</a></p>
      <p>Scroll through the forms list to see which ones apply. For example, here’s one for businesses like truck stops: <a href="https://gamingcontrolboard.pa.gov/?p=289">Video Gaming Terminal (VGT) Establishment License Application</a></p>
      </div>
      <div class="l-split">
        <h4>Tell Us about Yourself!</h4>
        @php
          echo do_shortcode('[wpforms id="7" title="false" description="false"]');
        @endphp
      </div>
     
    </div>
  </section>
@endsection
