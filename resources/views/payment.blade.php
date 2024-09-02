@extends('layouts.template')
@section('content')
    <div class="container section">
        <div class="row detail_order pb-5">
            <div class="col-12 order-title">
                Payment <span class="half-title-color">Progress</span>
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
            <div class="col-12">
                <div class="row order-desc">
                    <!-- Visible items -->
                    <div class="col-12 title">
                        Your Order
                    </div>
                    <div class="col-12 heading d-flex justify-content-between">
                        <span>Product</span>
                        <span>Subtotal</span>
                    </div>
                    <div class="col-12 text d-flex justify-content-between">
                        <span>Valorant Point 120 VP</span>
                        <span>321118752</span>
                    </div>
                    <hr>
                    <div class="col-12 d-flex justify-content-between">
                        <span class="heading">Sub Total</span>
                        <span class="text">Rp 142.000,-</span>
                    </div>
                    <div class="col-12 d-flex justify-content-between">
                        <span class="heading">Total Price</span>
                        <span class="text">Rp 142.000,-</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row payment-method">
            <div class="col-12 header">
                Payment <span class="half-title-color">Method</span>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="payment-box">
                            <div class="title">
                                QRIS Burpi Games
                            </div>
                            <div class="img-payment">
                                <img src="/assets/img/payment/qris-icon.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="col-6">
                                <div class="payment-box">
                                    <div class="title">Bank Transfer</div>
                                    <div class="img-payment">
                                        <img src="/assets/img/payment/bca-icon.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 ">
                                <div class="payment-box">
                                    <div class="title">E-Wallet Payment</div>
                                    <div class="img-payment">
                                        <img src="/assets/img/payment/grab-pay-icon.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="payment-box">
                                    <div class="title">Paypal Payment</div>
                                    <div class="img-payment">
                                        <img src="/assets/img/payment/paypal-icon.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="payment-box">
                                    <div class="title">Virtual Account</div>
                                    <div class="img-payment">
                                        <img src="/assets/img/payment/bank- bri-icon.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 btn-pay">
                        <button class="btn btn-cancel"><i class="icons icon-buy-now"></i>Pay The Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
