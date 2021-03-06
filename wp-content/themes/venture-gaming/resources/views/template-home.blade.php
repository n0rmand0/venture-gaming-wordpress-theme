{{--
  Template Name: Home Template
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
      <p><strong>You can’t wait to get the right </strong> video-gaming machines in place—and neither can your customers. We can help. Be ready to launch with a fully licensed and certified operator when Pennsylvania gives us both the go-ahead. </p>
      <p><strong>Even better,</strong> Venture Gaming is owned and operated by lifelong Pennsylvanians. We are committed to making your business a winner! </p>
      <p>Learn who we are by completing and submitting the form or by calling Brent Mayes at 724-333-4055.</p>
      <h4>What else?</h4>
      <p>Get a copy of your Establishment application here:<a target="_blank" href="https://gamingcontrolboard.pa.gov/files/licensure/applications/VGT_Establishment_Application_fillable.pdf"> Video Gaming Terminal (VGT) Applications</a></p>
      </div>
      <div class="l-split">
        <h4>Tell Us about Yourself!</h4>
        @php
          echo do_shortcode('[wpforms id="8" title="false" description="false"]');
        @endphp
        <div>
        <h4>Please let us introduce ourselves today!</h4>
        <p>Complete for the form or Call Brent today @ 724-333-4055 for assistance completing your Application</p>
        </div>
        


      </div>
     
    </div>
  </section>
@endsection
