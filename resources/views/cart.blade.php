@extends('layouts.template')
@section('content')
    <div class="container section">
        <div class="row detail_order">
            <div class="col-12 order-title">
                All Item In <span class="half-title-color">Cart</span>
            </div>
            <div class="col-12 list-item">
                <div class="row">
                    <!-- Visible items -->
                    <div class="col-12 detail-item">
                        <div class="row">
                            <div class="col-4 col-md-3 title">Games</div>
                            <div class="col-8 col-md-9 description"><img src="" alt=""
                                    class="img-icon">Valorant
                                Points 150VP
                            </div>
                        </div>
                    </div>
                    <div class="col-12 detail-item">
                        <div class="row">
                            <div class="col-4 col-md-3 title">Games Account</div>
                            <div class="col-8 col-md-9 description">February#2024
                            </div>
                        </div>
                    </div>
                    <div class="col-12 detail-item">
                        <div class="row">
                            <div class="col-4 col-md-3 title">Order Number</div>
                            <div class="col-8 col-md-9 description">321118752
                            </div>
                        </div>
                    </div>
                    <div class="col-12 detail-item">
                        <div class="row">
                            <div class="col-4 col-md-3 title">Order Amount</div>
                            <div class="col-8 col-md-9 description">Rp 142.000,-
                            </div>
                        </div>
                    </div>
                    <div class="col-12 detail-item">
                        <div class="row">
                            <div class="col-4 col-md-3 title">Discount</div>
                            <div class="col-8 col-md-9 description">-
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-cart">
                <button class="btn btn-cancel">
                    <i class="icons icon-trash"> Cancel</i>
                </button>
            </div>
            <div class="col-12 list-item">
                <div class="row">
                    <!-- Visible items -->
                    <div class="col-12 detail-item">
                        <div class="row">
                            <div class="col-4 col-md-3 title">Games</div>
                            <div class="col-8 col-md-9 description"><img src="" alt=""
                                    class="img-icon">Valorant
                                Points 150VP
                            </div>
                        </div>
                    </div>
                    <div class="col-12 detail-item">
                        <div class="row">
                            <div class="col-4 col-md-3 title">Games Account</div>
                            <div class="col-8 col-md-9 description">February#2024
                            </div>
                        </div>
                    </div>
                    <div class="col-12 detail-item">
                        <div class="row">
                            <div class="col-4 col-md-3 title">Order Number</div>
                            <div class="col-8 col-md-9 description">321118752
                            </div>
                        </div>
                    </div>
                    <div class="col-12 detail-item">
                        <div class="row">
                            <div class="col-4 col-md-3 title">Order Amount</div>
                            <div class="col-8 col-md-9 description">Rp 142.000,-
                            </div>
                        </div>
                    </div>
                    <div class="col-12 detail-item">
                        <div class="row">
                            <div class="col-4 col-md-3 title">Discount</div>
                            <div class="col-8 col-md-9 description">-
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-cart">
                <button class="btn btn-cancel">
                    <i class="icons icon-trash"> Cancel</i>
                </button>
            </div>
            <div class="total-price">
                Total Price <span class="half-title-color">Rp.150.000,-</span>
            </div>
        </div>
        <div class="btn-order">
            <a href="/payment">
                <button class="btn btn-submit">
                    <i class="icons icon-buy-now"></i>Check Out Now
                </button>
            </a>
        </div>
    </div>
@endsection
