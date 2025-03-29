<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from htmldemo.net/jesco/jesco/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Dec 2024 06:58:30 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="index, follow" />
    <title>Dilru fashion</title>
    <meta name="description" content="Jesco - Fashoin eCommerce HTML Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" type="image/png">

    <!-- vendor css (Icon Font) -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/pe-icon-7-stroke.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font.awesome.css') }}" />

    <!-- plugins css (All Plugins Files) -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/venobox.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />


</head>


<body>

    <!-- Top Bar -->



    <!-- Top Bar -->
    <!-- Header Area Start -->
    @include('partials.navbar')
    <!-- Header Area End -->
     <div class="offcanvas-overlay"></div>

  
    <!-- OffCanvas Wishlist End -->
    <!-- OffCanvas Cart Start -->
    @include('partials.cart-popup')
    <!-- OffCanvas Cart End -->

 
    <!-- OffCanvas Menu End -->


    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Shop</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->


    <!-- checkout area start -->
    <div class="checkout-area pt-100px pb-100px">
        <div class="container">
            <form action="{{ route('checkout.store') }}" method="POST">
                @csrf
            <div class="row">
                <div class="col-lg-7">
                    <div class="billing-info-wrap">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>First Name</label>
                                    <input type="text" name="full_name" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" />
                                </div>
                            </div>
                           
                            
                            <div class="col-lg-12">
                                <div class="billing-info mb-4">
                                    <label>Street Address</label>
                                    <input class="billing-address" name="street_address" placeholder="House number and street name"
                                        type="text" />
                                    
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-4">
                                    <label>Town / City</label>
                                    <input type="text" name="town" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>State / County</label>
                                    <input type="text"  name="country" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Postcode / ZIP</label>
                                    <input type="text"  name="postcode"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Phone</label>
                                    <input type="text" name="phone"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Email Address</label>
                                    <input type="text" name="email" />
                                </div>
                            </div>
                        </div>
                       
                        <div class="additional-info-wrap">
                            <h4>Additional information</h4>
                            <!-- Include Quill.js styles and script -->
                            <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
                            <script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>

                            <div class="additional-info">
                                <label>Order notes</label>

                                <!-- Quill editor container -->
                                <div id="quill-editor" style="height: 150px; border: 1px solid #ddd; border-radius: 5px;"></div>

                                <!-- Hidden input to store the HTML content -->
                                <input type="hidden" name="order_notes" id="message">
                            </div>

                            <!-- Script to initialize Quill.js -->
                            <script>
                                // Initialize Quill editor
                                const quill = new Quill('#quill-editor', {
                                    theme: 'snow', // Choose 'bubble' for a simpler UI
                                    placeholder: 'Notes about your order, e.g., special notes for delivery.',
                                    modules: {
                                        toolbar: [
                                            ['bold', 'italic', 'underline'], // Basic text formatting
                                            [{ 'list': 'ordered' }, { 'list': 'bullet' }], // Lists
                                            [{ 'align': [] }], // Text alignment
                                        ]
                                    }
                                });

                                // On form submission, store the Quill content in the hidden input
                                const form = document.querySelector('form'); // Adjust if form ID or class differs
                                form.onsubmit = () => {
                                    const messageInput = document.querySelector('#message');
                                    messageInput.value = quill.root.innerHTML; // Set Quill's HTML content to the hidden input
                                };
                            </script>

                        </div>
                        {{-- <div class="checkout-account mt-25">
                            <input class="checkout-toggle w-auto h-auto" type="checkbox" />
                            <label>Ship to a different address?</label>
                        </div>
                        <div class="different-address open-toggle mt-30px">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-4">
                                        <label>First Name</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-4">
                                        <label>Last Name</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-4">
                                        <label>Company Name</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-select mb-4">
                                        <label>Country</label>
                                        <select>
                                            <option>Select a country</option>
                                            <option>Azerbaijan</option>
                                            <option>Bahamas</option>
                                            <option>Bahrain</option>
                                            <option>Bangladesh</option>
                                            <option>Barbados</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-4">
                                        <label>Street Address</label>
                                        <input class="billing-address" placeholder="House number and street name"
                                            type="text" />
                                        <input placeholder="Apartment, suite, unit etc." type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-4">
                                        <label>Town / City</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-4">
                                        <label>State / County</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-4">
                                        <label>Postcode / ZIP</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-4">
                                        <label>Phone</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-4">
                                        <label>Email Address</label>
                                        <input type="text" />
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                @php
                    $cart = Session::get('cart', []);
                    $total = 0;
                @endphp

                    <input type="hidden" name="cart" value="{{ json_encode($cart, JSON_HEX_APOS) }}">

                <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                    <div class="your-order-area">
                        <h3>Your order</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Product</li>
                                        <li>Total</li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul>
                                        @foreach ($cart as $item)
                                            @php
                                                $subtotal = $item['price'] * $item['quantity'];
                                                $total += $subtotal;
                                            @endphp
                                            <li>
                                                <span class="order-middle-left">
                                                    {{ $item['name'] }} ({{ $item['size'] }}) X {{ $item['quantity'] }}
                                                </span>
                                                <span class="order-price">${{ number_format($subtotal, 2) }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Shipping</li>
                                        <li>Free shipping</li>
                                    </ul>
                                </div>
                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">Total</li>
                                        <li>${{ number_format($total, 2) }}</li>
                                    </ul>
                                </div>
                            </div>

                            
                        </div>

                        <div class="Place-order mt-25">
                           <button type="submit" class="btn-hover" >place order</button>
                        </div>
                    </div>
                </div>

            </div>

            @section('scripts')
                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const form = document.getElementById('checkout-form');
                    const submitBtn = document.getElementById('place-order-btn');
                    
                    form.addEventListener('submit', function(e) {
                        // Prevent double submission
                        submitBtn.disabled = true;
                        submitBtn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Processing...';
                    });
                });
                </script>
                @endsection
        </form>
        </div>
    </div>
    <!-- checkout area end -->
    <!-- Footer Area Start -->
    <div class="footer-area">
        <div class="footer-container">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-3 mb-md-30px mb-lm-30px">
                            <div class="single-wedge">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/images/logo/logo-white.png" alt=""></a>
                                </div>
                                <p class="about-text">Lorem ipsum dolor sit amet consectet adipisicing elit, sed do
                                    eiusmod templ incididunt ut labore et dolore magnaol aliqua Ut enim ad minim.
                                </p>
                                <ul class="link-follow">
                                    <li>
                                        <a class="m-0" title="Twitter" href="#"><i class="fa fa-twitter"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a title="Tumblr" href="#"><i class="fa fa-tumblr" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Instagram" href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-3 col-sm-6 col-lg-2 mb-md-30px mb-lm-30px pl-lg-50px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Quick Links</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="#">Support
                                                </a></li>
                                            <li class="li"><a class="single-link" href="#">Helpline</a></li>
                                            <li class="li"><a class="single-link" href="#">Courses</a></li>
                                            <li class="li"><a class="single-link" href="about.html">About</a></li>
                                            <li class="li"><a class="single-link" href="#">Event</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-3 col-lg-2 col-sm-6 mb-lm-30px pl-lg-50px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Other Page</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="about.html"> About </a>
                                            </li>
                                            <li class="li"><a class="single-link" href="blog-grid.html">Blog</a></li>
                                            <li class="li"><a class="single-link" href="#">Speakers</a></li>
                                            <li class="li"><a class="single-link" href="contact.html">Contact</a></li>
                                            <li class="li"><a class="single-link" href="#">Tricket</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-3 col-lg-2 col-sm-6 mb-lm-30px pl-lg-50px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Company</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="index.html">Jesco</a>
                                            </li>
                                            <li class="li"><a class="single-link" href="shop-left-sidebar.html">Shop</a></li>
                                            <li class="li"><a class="single-link" href="contact.html">Contact us</a></li>
                                            <li class="li"><a class="single-link" href="login.html">Log in</a></li>
                                            <li class="li"><a class="single-link" href="#">Help</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-4 col-lg-3 col-sm-6">
                            <div class="single-wedge">

                                <h4 class="footer-herading">Store Information.</h4>
                                <div class="footer-links">
                                    <!-- News letter area -->
                                    <p class="address">2005 Your Address Goes Here. <br>
                                        896, Address 10010, HGJ</p>
                                    <p class="phone">Phone/Fax:<a href="tel:0123456789">0123456789</a></p>
                                    <p class="mail">Email:<a href="mailto:demo@example.com">demo@example.com</a></p>
                                    <img src="assets/images/icons/payment.png" alt="" class="payment-img img-fulid">

                                    <!-- News letter area  End -->
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <p class="copy-text"> © 2023 <strong>Jesco</strong> Made With <i class="fa fa-heart"
                                    aria-hidden="true"></i> By <a class="company-name" href="../../../hasthemes.com/index.html">
                                    <strong> HasThemes</strong></a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area End -->

    <!-- Search Modal Start -->
    <div class="modal popup-search-style" id="searchActive">
        <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        <div class="modal-overlay">
            <div class="modal-dialog p-0" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Search Your Product</h2>
                        <form class="navbar-form position-relative" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search here...">
                            </div>
                            <button type="submit" class="submit-btn"><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    <!-- Login Modal Start -->
    <div class="modal popup-login-style" id="loginActive">
        <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        <div class="modal-overlay">
            <div class="modal-dialog p-0" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="login-content">
                            <h2>Log in</h2>
                            <h3>Log in your account</h3>
                            <form action="#">
                                <input type="text" placeholder="Username">
                                <input type="password" placeholder="Password">
                                <div class="remember-forget-wrap">
                                    <div class="remember-wrap">
                                        <input type="checkbox">
                                        <p>Remember</p>
                                        <span class="checkmark"></span>
                                    </div>
                                    <div class="forget-wrap">
                                        <a href="#">Forgot your password?</a>
                                    </div>
                                </div>
                                <button type="button">Log in</button>
                                <div class="member-register">
                                    <p> Not a member? <a href="login.html"> Register now</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ajax-mail.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>


<!-- Mirrored from htmldemo.net/jesco/jesco/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Dec 2024 06:58:34 GMT -->
</html>
