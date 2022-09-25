<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('template/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('template/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('template/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('template/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('template/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('template/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('template/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{asset('template/img/logo.png')}}" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="{{asset('template/img/language.png')}}" alt="">
                 <a href="/login"><i class="fa fa-user"></i> Login</a>
                {{-- <span class="arrow_carrot-down"></span> --}}
            </div>
            <div class="header__top__right__auth">
                
                <a href="/register"><i class="fa fa-user"></i> Register</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="/">Home</a></li>
                <li class=""><a href="/art">Art</a></li>
                <li><a href="/event">Event</a></li>
                <li><a href="/about">About</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i>#</li>
                <li>#</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <h2>Art Store</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="{{ ($title === "Home") ? 'active' : '' }}"><a href="/">Home</a></li>
                            <li class="{{ ($title === "Art") ? 'active' : '' }}"><a href="/art">Art</a></li>
                            <li class="{{ ($title === "Event") ? 'active' : '' }}"><a href="/event">Event</a></li>
                            <li class="{{ ($title === "About") ? 'active' : '' }}"><a href="/about">About</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__menu">
                        <ul>
                            <li class="{{ ($title === "Register") ? 'active' : '' }}"><a href="/register">Register</a></li>
                            <li class="{{ ($title === "Login") ? 'active' : '' }}"><a href="/login">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All Karya Seni</span>
                        </div>
                        <ul>
                            <li><a href="#">Seni Ilustrasi</a></li>
                            <li><a href="#">Seni Kriya</a></li>
                            <li><a href="#">Seni Lukis</a></li>
                            <li><a href="#">Seni Musik</a></li>
                            <li><a href="#">Seni Patung</a></li>
                            <li><a href="#">Seni Rupa</a></li>
                            <li><a href="#">Seni Tari</a></li>
                            <li><a href="#">Seni Teater</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="{{asset('template/img/art/rupa/1.jpg')}}">
                        <div class="hero__text">
                            <span>PRODUK TERBARU</span>
                            <h2>TERJAMIN <br />100% ORIGINAL</h2>
                            <p>Pilih dan Beli sekarang</p>
                            {{-- <a href="#" class="primary-btn">Beli Sekarang</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

   <div class="container">
    @yield('container')
   </div>


    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="{{asset('template/img/logo.png')}}" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: peldajoki.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <p>ini pelda tugasnya dijoki pack</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{asset('template/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('template/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('template/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('template/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('template/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('template/js/mixitup.min.js')}}"></script>
    <script src="{{asset('template/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('template/js/main.js')}}"></script>



</body>

</html>