@extends('layouts.app')
@section('title', 'Contact Us')
@section('content') 
   <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/bg_2.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact Us <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Contact us</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info justify-content-center">
          <div class="col-md-8">
            <div class="row mb-5">
              <div class="col-md-4 text-center py-4">
                <div class="icon">
                  <span class="icon-map-o"></span>
                </div>
                <p><span>Address:</span> Manchester, United Kingdom</p>
              </div>
              <div class="col-md-4 text-center border-height py-4">
                <div class="icon">
                  <span class="icon-mobile-phone"></span>
                </div>
                <p><span>Phone:</span> <a href="tel:+44-161-913-453">+44-161-913-453</a></p>
              </div>
              <div class="col-md-4 text-center py-4">
                <div class="icon">
                  <span class="icon-envelope-o"></span>
                </div>
                <p><span>Email:</span> <a href="mailto:info@ukluxurycarhire.co.uk">info@ukluxurycarhire.co.uk</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-8 mb-md-5">
            <h2 class="text-center">If you got any questions <br>please do not hesitate to send us a message</h2>
            @include('layouts.alert')
            <form action="/contact-us" method="POST" class="bg-light p-5 contact-form">
              @csrf
              <div class="form-group">
                <input type="text" required="name" name="name" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" required="email" name="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" required="subject" name="subject" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="message" required="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>
  
  @endsection