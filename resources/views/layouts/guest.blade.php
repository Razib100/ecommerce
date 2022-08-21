<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Bigshop | E-commerce </title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('frontend/img/core-img/favicon.ico')}}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/classy-nav.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/icofont.min.css')}}">


    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner-grow" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <!-- Header Area -->
    <header class="header_area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-6">
                        <div class="welcome-note">
                            <span class="popover--text" data-toggle="popover"
                                data-content="Welcome to Bigshop ecommerce template."><i
                                    class="icofont-info-square"></i></span>
                            <span class="text">Welcome to Bigshop ecommerce template.</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="language-currency-dropdown d-flex align-items-center justify-content-end">
                            <!-- Language Dropdown -->
                            <div class="language-dropdown">
                                <div class="dropdown">
                                    <a class="btn btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenu1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        English
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                        <a class="dropdown-item" href="#">Bangla</a>
                                        <a class="dropdown-item" href="#">Arabic</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Currency Dropdown -->
                            <div class="currency-dropdown">
                                <div class="dropdown">
                                    <a class="btn btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenu2"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        $ USD
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                                        <a class="dropdown-item" href="#">৳ BDT</a>
                                        <a class="dropdown-item" href="#">€ Euro</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Menu -->
        <div class="bigshop-main-menu">
            <div class="container">
                <div class="classy-nav-container breakpoint-off">
                    <nav class="classy-navbar" id="bigshopNav">

                        <!-- Nav Brand -->
                        <a href="index.html" class="nav-brand"><img src="{{ asset('frontend')}}/img/core-img/logo.png" alt="logo"></a>

                        <!-- Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Close -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="#">Home</a>
                                        <ul class="dropdown">
                                            <li><a href="index-1.html">Home - 1</a></li>
                                            <li><a href="index-2.html">Home - 2</a></li>
                                            <li><a href="index-3.html">Home - 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Shop</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Shop Grid</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a>
                                                    </li>
                                                    <li><a href="shop-grid-right-sidebar.html">Shop Grid Right
                                                            Sidebar</a></li>
                                                    <li><a href="shop-grid-top-sidebar.html">Shop Grid Top Sidebar</a>
                                                    </li>
                                                    <li><a href="shop-grid-no-sidebar.html">Shop Grid No Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Shop List</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                                    </li>
                                                    <li><a href="shop-list-right-sidebar.html">Shop List Right
                                                            Sidebar</a></li>
                                                    <li><a href="shop-list-top-sidebar.html">Shop List Top Sidebar</a>
                                                    </li>
                                                    <li><a href="shop-list-no-sidebar.html">Shop List No Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="product-details.html">Single Product</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="#">Checkout</a>
                                                <ul class="dropdown">
                                                    <li><a href="checkout-1.html">Login</a></li>
                                                    <li><a href="checkout-2.html">Billing</a></li>
                                                    <li><a href="checkout-3.html">Shipping Method</a></li>
                                                    <li><a href="checkout-4.html">Payment Method</a></li>
                                                    <li><a href="checkout-5.html">Review</a></li>
                                                    <li><a href="checkout-complate.html">Complate</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Account Page</a>
                                                <ul class="dropdown">
                                                    <li><a href="my-account.html">- Dashboard</a></li>
                                                    <li><a href="order-list.html">- Orders</a></li>
                                                    <li><a href="downloads.html">- Downloads</a></li>
                                                    <li><a href="addresses.html">- Addresses</a></li>
                                                    <li><a href="account-details.html">- Account Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="compare.html">Compare</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="about-us.html">- About Us</a></li>
                                                <li><a href="faq.html">- FAQ</a></li>
                                                <li><a href="contact.html">- Contact</a></li>
                                                <li><a href="login.html">- Login &amp; Register</a></li>
                                                <li><a href="404.html">- 404</a></li>
                                                <li><a href="500.html">- 500</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="my-account.html">- Dashboard</a></li>
                                                <li><a href="order-list.html">- Orders</a></li>
                                                <li><a href="downloads.html">- Downloads</a></li>
                                                <li><a href="addresses.html">- Addresses</a></li>
                                                <li><a href="account-details.html">- Account Details</a></li>
                                                <li><a href="coming-soon.html">- Coming Soon</a></li>
                                            </ul>
                                            <div class="single-mega cn-col-2">
                                                <div class="megamenu-slides owl-carousel">
                                                    <a href="shop-grid-left-sidebar.html">
                                                        <img src="{{ asset('frontend')}}/img/bg-img/mega-slide-2.jpg" alt="">
                                                    </a>
                                                    <a href="shop-list-left-sidebar.html">
                                                        <img src="{{ asset('frontend')}}/img/bg-img/mega-slide-1.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#">Blog</a>
                                        <ul class="dropdown">
                                            <li><a href="blog-with-left-sidebar.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-with-right-sidebar.html">Blog Right Sidebar</a></li>
                                            <li><a href="blog-with-no-sidebar.html">Blog No Sidebar</a></li>
                                            <li><a href="single-blog.html">Single Blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Elements</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="accordian.html">- Accordions</a></li>
                                                <li><a href="alerts.html">- Alerts</a></li>
                                                <li><a href="badges.html">- Badges</a></li>
                                                <li><a href="blockquotes.html">- Blockquotes</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="breadcrumb.html">- Breadcrumbs</a></li>
                                                <li><a href="buttons.html">- Buttons</a></li>
                                                <li><a href="forms.html">- Forms</a></li>
                                                <li><a href="gallery.html">- Gallery</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="heading.html">- Headings</a></li>
                                                <li><a href="icon-fontawesome.html">- Icon FontAwesome</a></li>
                                                <li><a href="icon-icofont.html">- Icon Ico Font</a></li>
                                                <li><a href="labels.html">- Labels</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="modals.html">- Modals</a></li>
                                                <li><a href="pagination.html">- Pagination</a></li>
                                                <li><a href="progress-bars.html">- Progress Bars</a></li>
                                                <li><a href="tables.html">- Tables</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Hero Meta -->
                        <div class="hero_meta_area ml-auto d-flex align-items-center justify-content-end">
                            <!-- Search -->
                            <div class="search-area">
                                <div class="search-btn"><i class="icofont-search"></i></div>
                                <!-- Form -->
                                <div class="search-form">
                                    <input type="search" class="form-control" placeholder="Search">
                                    <input type="submit" class="d-none" value="Send">
                                </div>
                            </div>

                            <!-- Wishlist -->
                            <div class="wishlist-area">
                                <a href="wishlist.html" class="wishlist-btn"><i class="icofont-heart"></i></a>
                            </div>

                            <!-- Cart -->
                            <div class="cart-area">
                                <div class="cart--btn"><i class="icofont-cart"></i> <span class="cart_quantity">2</span>
                                </div>

                                <!-- Cart Dropdown Content -->
                                <div class="cart-dropdown-content">
                                    <ul class="cart-list">
                                        <li>
                                            <div class="cart-item-desc">
                                                <a href="#" class="image">
                                                    <img src="{{ asset('frontend')}}/img/product-img/top-1.png" class="cart-thumb" alt="">
                                                </a>
                                                <div>
                                                    <a href="#">Kid's Fashion</a>
                                                    <p>1 x - <span class="price">$32.99</span></p>
                                                </div>
                                            </div>
                                            <span class="dropdown-product-remove"><i class="icofont-bin"></i></span>
                                        </li>
                                        <li>
                                            <div class="cart-item-desc">
                                                <a href="#" class="image">
                                                    <img src="{{ asset('frontend')}}/img/product-img/best-4.png" class="cart-thumb" alt="">
                                                </a>
                                                <div>
                                                    <a href="#">Headphone</a>
                                                    <p>2x - <span class="price">$49.99</span></p>
                                                </div>
                                            </div>
                                            <span class="dropdown-product-remove"><i class="icofont-bin"></i></span>
                                        </li>
                                    </ul>
                                    <div class="cart-pricing my-4">
                                        <ul>
                                            <li>
                                                <span>Sub Total:</span>
                                                <span>$822.96</span>
                                            </li>
                                            <li>
                                                <span>Shipping:</span>
                                                <span>$30.00</span>
                                            </li>
                                            <li>
                                                <span>Total:</span>
                                                <span>$856.63</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cart-box">
                                        <a href="checkout-1.html" class="btn btn-primary d-block">Checkout</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Account -->
                            <div class="account-area">
                                <div class="user-thumbnail">
                                    <img src="{{ asset('frontend')}}/img/bg-img/user.jpg" alt="">
                                </div>
                                <ul class="user-meta-dropdown">
                                    @if(Route::has('login'))

                                        @auth
                                        <!-- Admin -->
                                           @if(Auth::user()->role === 'admin')
                                                <li class="user-title"><span>Hello,</span> ({{Auth::user()->username}})</li>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="order-list.html">Orders List</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icofont-logout"></i> Logout</a></li>
                                                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                                    @csrf
                                                </form>
                                           @elseif(Auth::user()->role === 'vendor')
                                        <!-- Vendor -->
                                                <li class="user-title"><span>Hello,</span> ({{Auth::user()->username}})</li>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="order-list.html">Orders List</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icofont-logout"></i> Logout</a></li>
                                                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                                    @csrf
                                                </form>
                                            @else
                                        <!-- Customer -->
                                                <li class="user-title"><span>Hello,</span> ({{Auth::user()->username}})</li>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="order-list.html">Orders List</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icofont-logout"></i> Logout</a></li>
                                                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                                    @csrf
                                                </form>
                                           @endif 
                                        @else
                                        <li><a href="{{ route('login')}}"><i class="icofont-login"></i> Login</a></li> 
                                        <li><a href="{{ route('register')}}"><i class="icofont-logout"></i> Register</a></li>   
                                        @endif                                           
                                    @endif
                                    <!-- <li class="user-title"><span>Hello,</span> Lim Sarah</li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="order-list.html">Orders List</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="login.html"><i class="icofont-logout"></i> Logout</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    {{ $slot }}

    <!-- Footer Area -->
    <footer class="footer_area section_padding_100_0">
        <div class="container">
            <div class="row">
                <!-- Single Footer Area -->
                <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                    <div class="single_footer_area mb-100">
                        <div class="footer_heading mb-4">
                            <h6>Contact Us</h6>
                        </div>
                        <ul class="footer_content">
                            <li><span>Address:</span> Lords, London, UK - 1259</li>
                            <li><span>Phone:</span> 002 63695 24624</li>
                            <li><span>FAX:</span> 002 78965 369552</li>
                            <li><span>Email:</span> support@example.com</li>
                        </ul>
                        <div class="footer_social_area mt-15">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Area -->
                <div class="col-12 col-sm-6 col-md col-lg-4 col-xl-2">
                    <div class="single_footer_area mb-100">
                        <div class="footer_heading mb-4">
                            <h6>Information</h6>
                        </div>
                        <ul class="footer_widget_menu">
                            <li><a href="#"><i class="icofont-rounded-right"></i> Your Account</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Free Shipping Policy</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Your Cart</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Return Policy</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Free Coupon</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Delivary Info</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Single Footer Area -->
                <div class="col-12 col-sm-6 col-md col-lg-4 col-xl-2">
                    <div class="single_footer_area mb-100">
                        <div class="footer_heading mb-4">
                            <h6>Account</h6>
                        </div>
                        <ul class="footer_widget_menu">
                            <li><a href="#"><i class="icofont-rounded-right"></i> Product Support</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Terms &amp; Conditions</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Help</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Payment Method</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Affiliate Program</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Single Footer Area -->
                <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-2">
                    <div class="single_footer_area mb-100">
                        <div class="footer_heading mb-4">
                            <h6>Support</h6>
                        </div>
                        <ul class="footer_widget_menu">
                            <li><a href="#"><i class="icofont-rounded-right"></i> Payment Method</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Help</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Product Support</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Terms &amp; Conditions</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Privacy Policy</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Affiliate Program</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Single Footer Area -->
                <div class="col-12 col-md-7 col-lg-8 col-xl-3">
                    <div class="single_footer_area mb-50">
                        <div class="footer_heading mb-4">
                            <h6>Join our mailing list</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="form-control mail"
                                    placeholder="Your E-mail Addrees">
                                <button type="submit" class="submit"><i class="icofont-long-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="single_footer_area mb-100">
                        <div class="footer_heading mb-4">
                            <h6>Download our Mobile Apps</h6>
                        </div>
                        <div class="apps_download">
                            <a href="#"><img src="{{ asset('frontend')}}/img/core-img/play-store.png" alt="Play Store"></a>
                            <a href="#"><img src="{{ asset('frontend')}}/img/core-img/app-store.png" alt="Apple Store"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer_bottom_area">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Copywrite -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite_text">
                            <p>Made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#">Designing
                                    World</a></p>
                        </div>
                    </div>
                    <!-- Payment Method -->
                    <div class="col-12 col-md-6">
                        <div class="payment_method">
                            <img src="{{ asset('frontend')}}/img/payment-method/paypal.png" alt="">
                            <img src="{{ asset('frontend')}}/img/payment-method/maestro.png" alt="">
                            <img src="{{ asset('frontend')}}/img/payment-method/western-union.png" alt="">
                            <img src="{{ asset('frontend')}}/img/payment-method/discover.png" alt="">
                            <img src="{{ asset('frontend')}}/img/payment-method/american-express.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{ asset('frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/classy-nav.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/scrollup.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/jarallax.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/jarallax-video.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/active.js')}}"></script>

</body>

</html>


