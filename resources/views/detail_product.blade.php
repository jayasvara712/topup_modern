@extends('layouts.template')
@section('content')
    <div class="container section mt-5">
        <div class="row product-detail">
            <div class="col-12 col-md-4 product-image">
                <div class="card">
                    <!-- Text Box on Top Left -->
                    <div class="text-box">
                        <i class="icons icon-instant-delivery"></i>Instant Delivery
                    </div>

                    <!-- Centered Image -->
                    <div class="card-image">
                        <img src="assets/img/products/eggy-party.png" alt="Centered Image">
                    </div>

                    <!-- Text Below the Image -->
                    <div class="card-text">
                        5v5 character-based tactical FPS where precise gunplay meets unique agent abilities.
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <!-- Scrollable Nav Tabs -->
                <div class=" mb-4 categories">
                    <div class="scrollable-tabs-container">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                    type="button" role="tab" aria-controls="home" aria-selected="true"><i
                                        class="icons icon-games"></i>Valorant</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                    type="button" role="tab" aria-controls="razer" aria-selected="false"><i
                                        class="icons icon-best-seller"></i>Gift Skin</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                    type="button" role="tab" aria-controls="razer" aria-selected="false"><i
                                        class="icons icon-login"></i>Custom Bundle</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Content Sections -->
                <div class="tab-content mt-4" id="myTabContent">
                    <!-- Home Content -->
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <!-- Product Card 1 -->
                            <div class="col-6 col-md-4 mb-4">
                                <div class="card product-option" onclick="selectProduct(this)">
                                    <!-- Card Header -->
                                    <div class="card-header">
                                        <div class="title">375 <br> Valorant Point (VP)</div>
                                        <div class="image">
                                            <img src="/assets/img/icon-vp-point.png" alt="Product Image">
                                        </div>
                                    </div>

                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <span>start From</span>
                                        <span class="price">Rp.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 mb-4">
                                <div class="card product-option" onclick="selectProduct(this)">
                                    <!-- Card Header -->
                                    <div class="card-header">
                                        <div class="title">180 <br> Valorant Point (VP)</div>
                                        <div class="image">
                                            <img src="/assets/img/icon-vp-point.png" alt="Product Image">
                                        </div>
                                    </div>

                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <span>start From</span>
                                        <span class="price">
                                            <small class="discount">15%</small> Rp.100.000
                                        </span>
                                        <span>Real Price Without Discount <s>Rp.150.000</s></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 mb-4">
                                <div class="card product-option" onclick="selectProduct(this)">
                                    <!-- Card Header -->
                                    <div class="card-header">
                                        <div class="title">180 <br> Valorant Point (VP)</div>
                                        <div class="image">
                                            <img src="/assets/img/icon-vp-point.png" alt="Product Image">
                                        </div>
                                    </div>

                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <span>start From</span>
                                        <span class="price">
                                            <small class="discount">15%</small> Rp.100.000
                                        </span>
                                        <span>Real Price Without Discount <s>Rp.150.000</s></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 mb-4">
                                <div class="card product-option" onclick="selectProduct(this)">
                                    <!-- Card Header -->
                                    <div class="card-header">
                                        <div class="title">180 <br> Valorant Point (VP)</div>
                                        <div class="image">
                                            <img src="/assets/img/icon-vp-point.png" alt="Product Image">
                                        </div>
                                    </div>

                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <span>start From</span>
                                        <span class="price">
                                            <small class="discount">15%</small> Rp.100.000
                                        </span>
                                        <span>Real Price Without Discount <s>Rp.150.000</s></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Repeat for more products -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <form action="#">
                            <div>
                                <label for="">Account Detail</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                            <div>
                                <label for="">Region</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Select Region</option>
                                    <option value="ID">ID</option>
                                    <option value="SG">SG</option>
                                </select>
                            </div>
                            <div>
                                <label for="">Email Address</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                            <div>
                                <label for="">Whatsapp Number</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="button-container" mt-5">
                            <button type="button" class="btn btn-submit" data-bs-toggle="modal"
                                data-bs-target="#purchaseModal"><i class="icons icon-cart-white"></i>Cart</button>
                            <button type="button" class="btn btn-submit" data-bs-toggle="modal"
                                data-bs-target="#purchaseModal">
                                Buy Now
                            </button>
                            <button type="button" class="btn btn-submit"><i class="icons icon-live-chat-white"></i>Live
                                Chat</button>
                        </div>
                        <div class="instruction">
                            <h5>How To Order</h5>
                            <ul>
                                <li>
                                    Enter Valorant with your RIOT Account.
                                </li>
                                <li>
                                    Click on the VP button in the upper right corner.

                                </li>
                                <li>
                                    Click on the "Riot PIN and Codes" button in the "Select Purchase Method" field.
                                </li>
                                <li>
                                    Enter the Riot PIN you received in the field at the bottom and click the "Submit"
                                    button.
                                </li>
                                <li>
                                    VALORANT Points will be added directly into your VALORANT account!</li>
                                </li>
                            </ul>
                            <div class="helper">
                                <p>
                                    Please Contact our <span class="half-title-color">Live Chat</span> or <span
                                        class="half-title-color">Whatsapp</span> with your ORDER NUMBER if you did not
                                    receive your Riot Pin (SGD) in your Email After 30 Minutes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
