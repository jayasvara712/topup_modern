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
    <div class="container mt-5">
        <h1>Order <span class="half-title-color">Tracking</span><i class="icons title icon-order"></i></h1>
        <form action="#" method="POST" class="row form-tracking">
            <div class="col-12 col-md-12">
                <p>To track your order, please enter your Order Number* and your Email Address that was used for your
                    purchase below.</p>
                <p>*Your Order Number can be found in the confirmation Email that was sent to you / in our Thank You Page.
                </p>
            </div>
            <div class="col-12 col-md-5">
                <input type="text" class="form-control" name="no_invoice" placeholder="Order Number / Invoice">
            </div>
            <div class="col-12 col-md-5">
                <input type="email" class="form-control" name="email" placeholder="Email Address">
            </div>
            <div class="col-12 col-md-2">
                <button class="btn" type="submit">Track Order</button>
            </div>
        </form>
    </div>
    {{-- end order tracking --}}

    <!-- Products Section -->
    <div class="container mt-5">
        <h1>Our <span class="half-title-color">Product</span><i class="icons title icon-games"></i></h1>
        <!-- Scrollable Nav Tabs -->
        <div class="d-flex justify-content-between align-items-center mb-4 categories">
            <div class="scrollable-tabs-container">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true"><i
                                class="icons icon-games"></i>All Games</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                            role="tab" aria-controls="razer" aria-selected="false"><i
                                class="icons icon-best-seller"></i>Best Seller</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                            role="tab" aria-controls="razer" aria-selected="false"><i class="icons icon-login"></i>Via
                            Login</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="razer" aria-selected="false"><i
                                class="icons icon-uid"></i>Via UID</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="razer-tab" data-bs-toggle="tab" data-bs-target="#razer"
                            type="button" role="tab" aria-controls="razer" aria-selected="false"><i
                                class="icons icon-razer"></i>Link
                            Razer</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="razer" aria-selected="false"><i
                                class="icons icon-card"></i>Gift Card</button>
                    </li>
                </ul>
            </div>
            <div class="btn-chat">
                <button class="btn live-chat-button"><i class="icons icon-live-chat"></i>Live Chat</button>
                <small>Check our Stock to our Custommer Service</small>
            </div>
        </div>

        <!-- Content Sections -->
        <div class="tab-content mt-4" id="myTabContent">
            <!-- Home Content -->
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <!-- Product Card 1 -->
                    <div class="col-4 col-md-2 mb-4">
                        <a href="#">
                            <div class="card product-card">
                                <div class="card-image">
                                    <img src="assets/img/products/8-ball-pool.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="card-title">8 Ball Pool</div>
                                    <div class="card-delivery"><i class="icons icon-instant-delivery"></i> Instant
                                        Delivery</div>
                                    <div class="card-stock">Ready Stock <div class="indicator"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-md-2 mb-4">
                        <a href="#">
                            <div class="card product-card">
                                <div class="card-image">
                                    <img src="assets/img/products/8-ball-pool.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="card-title">8 Ball Pool</div>
                                    <div class="card-delivery"><i class="icons icon-instant-delivery"></i> Instant
                                        Delivery</div>
                                    <div class="card-stock">Ready Stock <div class="indicator"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-md-2 mb-4">
                        <a href="#">
                            <div class="card product-card">
                                <div class="card-image">
                                    <img src="assets/img/products/8-ball-pool.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="card-title">8 Ball Pool</div>
                                    <div class="card-delivery"><i class="icons icon-instant-delivery"></i> Instant
                                        Delivery</div>
                                    <div class="card-stock">Ready Stock <div class="indicator"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-md-2 mb-4">
                        <a href="#">
                            <div class="card product-card">
                                <div class="card-image">
                                    <img src="assets/img/products/8-ball-pool.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="card-title">8 Ball Pool</div>
                                    <div class="card-delivery"><i class="icons icon-instant-delivery"></i> Instant
                                        Delivery</div>
                                    <div class="card-stock">Ready Stock <div class="indicator"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-md-2 mb-4">
                        <a href="#">
                            <div class="card product-card">
                                <div class="card-image">
                                    <img src="assets/img/products/8-ball-pool.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="card-title">8 Ball Pool</div>
                                    <div class="card-delivery"><i class="icons icon-instant-delivery"></i> Instant
                                        Delivery</div>
                                    <div class="card-stock">Ready Stock <div class="indicator"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-md-2 mb-4">
                        <a href="#">
                            <div class="card product-card">
                                <div class="card-image">
                                    <img src="assets/img/products/8-ball-pool.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="card-title">8 Ball Pool</div>
                                    <div class="card-delivery"><i class="icons icon-instant-delivery"></i> Instant
                                        Delivery</div>
                                    <div class="card-stock">Ready Stock <div class="indicator"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-md-2 mb-4">
                        <a href="#">
                            <div class="card product-card">
                                <div class="card-image">
                                    <img src="assets/img/products/8-ball-pool.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="card-title">8 Ball Pool</div>
                                    <div class="card-delivery"><i class="icons icon-instant-delivery"></i> Instant
                                        Delivery</div>
                                    <div class="card-stock">Ready Stock <div class="indicator"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Repeat for more products -->
                </div>
            </div>

            <!-- Razer Content -->
            <div class="tab-pane fade razer-form" id="razer" role="tabpanel" aria-labelledby="razer-tab">
                <form id="razer-form">
                    <h1>Razer <span class="half-title-color">Link</span><i class="icons title icon-razer"></i></h1>
                    <div class="mt-3 mb-3">
                        <input type="text" class="form-control" id="link-razer" name="link-razer"
                            placeholder="Put link razer here">
                    </div>
                    <div class="form-button">
                        <button type="submit" class="btn btn-submit">Submit</button>
                    </div>
                </form>

                <div class="table-responsive mt-3">
                    <table class="table table-bg-transparent">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Link Razer</th>
                                <th>Currency</th>
                                <th>Input Time</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>https:razer.com/lorem5d2d2d2d2d2</td>
                                <td>Rp.100.000</td>
                                <td>27/08/2024 14:23:32</td>
                                <td>Expired</td>
                                <td><i class="icons icon-trash"></i></td>
                            </tr>
                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>https:razer.com/lorem5d2d2d2d2d2</td>
                                <td>Rp.150.000</td>
                                <td>27/08/2024 14:23:32</td>
                                <td>Expired</td>
                                <td><i class="icons icon-trash"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="button-container" mt-5">
                    <button type="submit" class="btn btn-submit"><i class="icons icon-cart"></i>Cart</button>
                    <button type="submit" class="btn btn-submit">Buy Now</button>
                </div>

            </div>
        </div>
    </div>

    {{-- end product --}}
@endsection
