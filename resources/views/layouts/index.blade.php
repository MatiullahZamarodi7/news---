<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap RTL CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.rtl.min.css" />
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/fonts/flaticon.css" />
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="assets/css/boxicons.min.css" />
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css" />
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css" />
    <!-- Jquery Ui CSS -->
    <link rel="stylesheet" href="assets/css/jquery-ui.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <!-- Theme Dark CSS -->
    <link rel="stylesheet" href="assets/css/theme-dark.css" />
    <!-- RTL CSS -->
    <link rel="stylesheet" href="assets/css/rtl.css" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />

    <title>NewsBlog System</title>
</head>

<body>
    <!-- PreLoader Start -->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="sk-cube-area">
                    <div class="sk-cube1 sk-cube"></div>
                    <div class="sk-cube2 sk-cube"></div>
                    <div class="sk-cube4 sk-cube"></div>
                    <div class="sk-cube3 sk-cube"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- PreLoader End -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img style="width: 100px" src="assets/img/logo.png" class="logo-one" alt="Logo" />
                <img style="width: 100px" src="assets/img/logo.png" class="logo-two" alt="Logo" />
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav nav-two">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img style="width: 100px" src="assets/img/logo.png" class="logo-one" alt="Logo" />
                        <img style="width: 100px" src="assets/img/logo.png" class="logo-two" alt="Logo" />
                    </a>

                    @include('layouts.navbar')
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    <!-- Banner Area Two -->
    <div class="banner-area-two">
        @session('success')
            <div class="alert fade show dismissible alert-success">
                <p class="mb-1">{{ session('success') }}</p>
            </div>
        @endsession
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-another">
                        <h1>
                            ما شما را از تازه ترین اخبار جهان آگاه میسازیم
                        </h1>
                        <p>
                            ما با داشتن تیم مسلکی در صدر وبسایت های خبری
                            کشور قرار داریم
                        </p>
                        <div class="banner-btn">
                            <a href="{{ Route('news') }}" class="default-btn btn-bg-two border-radius-50">دیدن تازه
                                ترین ها</a>
                        </div>

                        <div class="banner-shape">
                            <img src="assets/img/home-two/shape.png" alt="Images" style="height: 450px ;">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="banner-img" style="height: 450px">
                        <img src="assets/img/kabulNewsImg.png" alt="Images" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area Two End -->

    <!-- Testimonials Area Two  -->
    <div class="testimonials-area-two pb-70 pt-100">
        <div class="container">
            <div class="section-title text-center">
                <h2>داغ ترین خبر ها</h2>
            </div>
            <div class="testimonials-slider-two owl-carousel owl-theme pt-45">
                <div class="testimonials-style">
                    <div class="row align-items-center">
                        @if ($post)
                            <div class="col-lg-7">
                                <div class="testimonials-img">
                                    <img
                                        src="{{ Storage::disk('public')->exists('uploads/posts/' . $post->image)
                                            ? asset('storage/uploads/posts/' . $post->image)
                                            : asset('storage/defualts/nofound.svg') }}">
                                    <div class="content">
                                        <h3>{{ $post->title }}</h3>
                                        <span>پوست مربوط به - صبح کابل- است</span>
                                        <span>
                                            <i class="bx bx-time-alt-dots"></i> |
                                            {{ $post->created_at->diffForHumans() }}

                                        </span>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="testimonials-content">
                                    <i class="flaticon-left-quote"></i>
                                    <p>
                                        {{ $post->content }}
                                    </p>
                                    <span>
                                        {{ $post->user->name ? $post->user->name : 'یوزیر مربوط دلیت شده است' }}</span>
                                </div>
                            </div>
                        @else
                            <div class="col-lg-12">
                                <p>پستی برای نمایش وجود ندارد.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials Area Two End -->

    <!-- Footer Area -->
    <footer class="footer-area footer-bg">
        <div class="container">
            <div class="copy-right-area copy-right-top">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="copy-right-text text-align1">
                            <p>
                                Copyright @
                                <script>
                                    document.write(
                                        new Date().getFullYear(),
                                    );
                                </script>
                                -> Z<sup>9</sup>GPS
                                <a href="https://matiullahzamarodi.wuaze.com" target="_blank">Matiullah Zamarodi</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="social-icon text-align2">
                            <ul class="social-link">
                                <li>
                                    <a href="#" target="_blank"><i class="bx bxl-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class="bx bxl-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class="bx bxl-pinterest-alt"></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class="bx bxl-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- Jquery Min JS -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap Bundle Min JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Magnific Popup Min JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Owl Carousel Min JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Nice Select Min JS -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- Wow Min JS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Jquery Ui JS -->
    <script src="assets/js/jquery-ui.js"></script>
    <!-- Meanmenu JS -->
    <script src="assets/js/meanmenu.js"></script>
    <!-- Ajaxchimp Min JS -->
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- Form Validator Min JS -->
    <script src="assets/js/form-validator.min.js"></script>
    <!-- Contact Form JS -->
    <script src="assets/js/contact-form-script.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>
