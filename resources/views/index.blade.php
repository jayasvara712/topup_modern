@extends('layouts.template')
@section('content')
    <!-- Banner Section -->
    <div class="pt-5 mt-5 banner-section">
        <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <div class="carousel-image">
                            <img src="assets/img/banner1.webp" class="d-block" alt="Banner Image 1">
                        </div>
                        <div class="carousel-image">
                            <img src="assets/img/banner2.webp" class="d-block" alt="Banner Image 2">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="carousel-image">
                            <img src="assets/img/banner3.webp" class="d-block" alt="Banner Image 3">
                        </div>
                        <div class="carousel-image">
                            <img src="assets/img/banner1.webp" class="d-block" alt="Banner Image 4">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
        </div>
    </div>

    {{-- flash sale --}}
    {{-- end Flash Sale Section --}}

    <!-- Order Tracking -->
    <div class="p-4 container">
        <h1>Order <span class="half-title-color">Tracking</span><i class="icons title icon-order"></i></h1>
        <form action="#" method="POST" class="row form-tracking">
            <div class="col-lg-12">
                <p>To track your order, please enter your Order Number* and your Email Address that was used for your
                    purchase below.</p>
                <p>*Your Order Number can be found in the confirmation Email that was sent to you / in our Thank You Page.
                </p>
            </div>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="no_invoice" placeholder="Order Number / Invoice">
            </div>
            <div class="col-lg-5">
                <input type="email" class="form-control" name="email" placeholder="Email Address">
            </div>
            <div class="col-lg-2">
                <button class="btn" type="submit">Track Order</button>
            </div>
        </form>
    </div>
    {{-- end order tracking --}}

    <!-- Categories Section -->
    <div class="container mt-5">
        <h1>Our <span class="half-title-color">Product</span><i class="icons title icon-games"></i></h1>
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="category-buttons-container">
                        <a href="#" class="btn category-btn active"><i class="icons icon-games"></i>All Games</a>
                        <a href="#" class="btn category-btn"><i class="icons icon-best-seller"></i>Best Seller</a>
                        <a href="#" class="btn category-btn"><i class="icons icon-login"></i>Via Login</a>
                        <a href="#" class="btn category-btn"><i class="icons icon-uid"></i>Via UID</a>
                        <a href="#" class="btn category-btn"><i class="icons icon-razer"></i>Link Razer</a>
                        <a href="#" class="btn category-btn"><i class="icons icon-card"></i>Gift Card</a>
                        <!-- Add more buttons as needed -->
                    </div><button class="btn live-chat-button"><i class="icons icon-live-chat"></i>Live Chat</button>
                </div>
            </div>
        </div>

    </div>

    <!-- Products Section -->
    <div class="container">
        <div class="row">
            <!-- Product Card 1 -->
            <div class="col-4 col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="/detail">
                    <div class="card product-card">
                        <div class="card-image">
                            <img src="assets/img/products/8-ball-pool.png" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-title">8 Ball Pool</p>
                            <p class="card-delivery"><i class="icons icon-instant-delivery"></i> Instant Delivery</p>
                            <p class="card-stock">Ready Stock</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Repeat for more products -->
        </div>
    </div>
    {{-- end product --}}

    {{-- about us --}}
    <div class="p-4 container">
        <div class="about-us">
            <div class="header">
                <img src="assets/img/logo.png" class="logo">
                <p>Gaming is an exciting form of digital entertainment and a thriving marketplace for digital products.
                    As
                    gamers
                    ourselves, we understand the importance of finding ways to recharge our favorite games at a cheaper
                    price
                    using
                    legal methods. This allows us to save money and purchase even more packages to become top players in
                    the
                    games
                    we love. That’s why Burpigames is here to provide a solution, using our experience and expertise to
                    offer a
                    24/7
                    recharge service for all of your gaming needs.</p>
            </div>
            <h2>Why should you buy at <span class="half-title-color">Burpi Games</span></h2>
            <div class="row p-5">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="assets/img/icons/discount_icon.png" class="" alt="...">
                        </div>
                        <div class="col-lg-9">
                            <h5>Bigger Discount</h5>
                            <p>Get more for your money with Burpi Games. We offer the biggest
                                discounts on game credit top-ups, so you can save money while enjoying more of your
                                favourite games.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="assets/img/icons/discount_icon.png" class="" alt="...">
                        </div>
                        <div class="col-lg-9">
                            <h5>Bigger Discount</h5>
                            <p>Get more for your money with Burpi Games. We offer the biggest
                                discounts on game credit top-ups, so you can save money while enjoying more of your
                                favourite games.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="assets/img/icons/discount_icon.png" class="" alt="...">
                        </div>
                        <div class="col-lg-9">
                            <h5>Bigger Discount</h5>
                            <p>Get more for your money with Burpi Games. We offer the biggest
                                discounts on game credit top-ups, so you can save money while enjoying more of your
                                favourite games.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="assets/img/icons/discount_icon.png" class="" alt="...">
                        </div>
                        <div class="col-lg-9">
                            <h5>Bigger Discount</h5>
                            <p>Get more for your money with Burpi Games. We offer the biggest
                                discounts on game credit top-ups, so you can save money while enjoying more of your
                                favourite games.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end about us --}}
@endsection
