{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  <section class="hero">
    <div class="l-container">
        <img class="hero__logo" src="/wp-content/themes/venture-gaming/resources/assets/images/venture-gaming-logo-full-color.png" alt="">
        <h2 class="hero__title">
        Your PA Gaming Partner
        </h2>
    </div>
  </section>
  <section class="contact">
    <div class="l-container l-container--grid">
      <div class="l-split">
       <h2>Contact Us</h2>
      <h3>Talk to us about adding gaming machines to your establishment today. </h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cil</p>
      </div>
      <div class="l-split">
        @php
          echo do_shortcode('[wpforms id="7" title="false" description="false"]');
        @endphp
      </div>
     
    </div>
  </section>
@endsection
