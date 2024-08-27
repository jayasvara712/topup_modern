@extends('layouts.template')
@section('content')
    <!-- Section 1 -->
    <div class="section section-1">
        <video autoplay muted loop playsinline>
            <source src="assets/video/header.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <marquee>//Join Our Website For Get Free Promo Code & Updates on Special Prices Login
                        Now It’s Free..// </marquee>
                </div>
                <div class="col-lg-3 col-12 fixed-text">
                    <h1>INSTANT</h1>
                    <h1 class="middle-fixed-text">CHEAP</h1>
                    <h1>SECURE</h1>
                </div>
                <div class="col-lg-9 col-12 image-slider">
                    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/banner1.webp" class="d-block" alt="Image 1">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/banner2.webp" class="d-block" alt="Image 2">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/banner3.webp" class="d-block" alt="Image 3">
                            </div>
                        </div>
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 2 -->
    <div class="section section-2">
        <div>
            <h1>Section 2</h1>
            <p>Content for the second section.</p>
        </div>
    </div>

    <!-- Section 3 -->
    <div class="section section-3">
        <div>
            <h1>Section 3</h1>
            <p>Content for the third section.</p>
        </div>
    </div>
@endsection
