<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Burpigames</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    {{-- List Icon --}}
    <link rel="stylesheet" href="assets/css/icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar text-light mt-5 d-lg-none" id="sidebar">
        <ul class="navbar-nav">
            <li class="nav-item mt-2">
                <a class="nav-link" href="/"><i class="icons icon-menu"></i> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="icons icon-order"></i> Track Order</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" aria-expanded="false">
                    <i class="icons icon-currency"></i>IDR
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">USD</a></li>
                    <li><a class="dropdown-item" href="#">EUR</a></li>
                    <li><a class="dropdown-item" href="#">IDR</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cart"><i class="icons icon-cart"></i>Cart</a>
            </li>
            <li class="nav-item">
                <button class="btn btn-login">Login</button>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="assets/img/logo.png" class="navbar-logo"
                    alt="Logo"></a>
            <button class="btn d-lg-none d-flex align-items-center ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebar" aria-controls="sidebar" aria-expanded="false">
                <i class="icons icon-menu"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="icons icon-order"></i> Track Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/"><i class="icons icon-menu"></i> Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="icons icon-currency"></i> IDR
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">USD</a></li>
                            <li><a class="dropdown-item" href="#">EUR</a></li>
                            <li><a class="dropdown-item" href="#">IDR</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cart"><i class="icons icon-cart"></i>&nbsp;</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-login">Login</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    {{-- about us --}}
    <div class="container section">
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
            <div class="row content">
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <img src="assets/img/icon-1.png" class="" alt="...">
                        </div>
                        <div class="col-12 col-md-9">
                            <h5>Bigger Discount</h5>
                            <p>Get more for your money with Burpi Games. We offer the biggest
                                discounts on game credit top-ups, so you can save money while enjoying more of your
                                favourite games.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="assets/img/icon-2.png" class="" alt="...">
                        </div>
                        <div class="col-lg-9">
                            <h5>Bigger Discount</h5>
                            <p>Get more for your money with Burpi Games. We offer the biggest
                                discounts on game credit top-ups, so you can save money while enjoying more of your
                                favourite games.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="assets/img/icon-3.png" class="" alt="...">
                        </div>
                        <div class="col-lg-9">
                            <h5>Bigger Discount</h5>
                            <p>Get more for your money with Burpi Games. We offer the biggest
                                discounts on game credit top-ups, so you can save money while enjoying more of your
                                favourite games.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="assets/img/icon-4.png" class="" alt="...">
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

    {{-- footer --}}
    <!-- Footer Section -->
    <footer class="section footer-section">
        <div class="container">
            <div class="row">
                <!-- Payment Methods Column -->
                <div class="col-12 col-md-5 footer-column">
                    <h4 class="footer-title"><span class="footer-title-bar">&nbsp;</span>Payment Methods</h4>
                    <div class="payment-methods">
                        <img src="assets/img/payment/qris-icon.png" alt="Payment Method 1">
                        <img src="assets/img/payment/bank-bri-icon.png" alt="Payment Method 2">
                        <img src="assets/img/payment/grab-pay-icon.png" alt="Payment Method 3">
                        <img src="assets/img/payment/paypal-icon.png" alt="Payment Method 3">
                        <!-- Add more payment method images as needed -->
                    </div>
                </div>
                <!-- Information Column -->
                <div class="col-12 col-md-3 footer-column">
                    <h4 class="footer-title"><span class="footer-title-bar">&nbsp;</span>Information</h4>
                    <ul class="footer-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Legal</a></li>
                    </ul>
                </div>
                <!-- User Support Column -->
                <div class="col-12 col-md-4 footer-column">
                    <h4 class="footer-title"><span class="footer-title-bar">&nbsp;</span>User Support</h4>
                    <div class="user-support">
                        <a href="#" class="btn support-btn"><i class="icons icon-whatsapp"></i>
                            WhatsApp IDN</a>
                        <a href="#" class="btn support-btn"><i class="icons icon-whatsapp"></i>
                            Whatsapp SGP</a>
                    </div>
                    <div class="social-media">
                        <a href="#"><i class="icons title icon-facebook"></i></a>
                        <a href="#"><i class="icons title icon-instagram"></i></a>
                        <a href="#"><i class="icons title icon-youtube"></i></a>
                        <!-- Add more social media icons as needed -->
                    </div>
                </div>
                <div class="col-12 copyright">
                    <h5>2024 PT. Burpi Games All Rights Reserved.
                        <br>
                        All other trademarks belong to their respective owners.
                    </h5>
                </div>
            </div>
        </div>
    </footer>
    {{-- end footer --}}

    {{-- modal confirmation --}}
    <!-- Purchase Confirmation Modal -->
    <div class="modal fade modal-confirmation" id="purchaseModal" tabindex="-1"
        aria-labelledby="purchaseModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="purchaseModalLabel">Order Detail</h5>
                </div>
                <div class="modal-body ">
                    <!-- Purchase Details -->
                    <div class="order-item">
                        <span>ID Game:</span>
                        <span>512121841</span>
                    </div>
                    <div class="order-item">
                        <span>Server Game:</span>
                        <span>SEA Region</span>
                    </div>
                    <div class="order-item">
                        <span>Email:</span>
                        <span>feb@gmail.com</span>
                    </div>
                    <div class="order-item">
                        <span>whatsapp:</span>
                        <span>-</span>
                    </div>
                    <div class="order-item">
                        <span>Item Name:</span>
                        <span>Valorant Vspan</span>
                    </div>
                    <div class="order-item">
                        <span>Price:</span>
                        <span>RP.100.000</span>
                    </div>
                    <div class="order-item">
                        <span>Discount:</span>
                        <span>-</span>
                    </div>
                    <hr>
                    <div class="order-item">
                        <span>Total Price:</span>
                        <span>RP.100.000</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                        </div>
                        <div class="col-12 col-lg-6">
                            <a href="/detail_order"><button type="button"
                                    class="btn btn-submit">Confirm</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal confirmation --}}

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
