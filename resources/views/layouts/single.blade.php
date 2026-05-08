<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap RTL CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}" />
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}" />
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}" />
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}" />
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}" />
    <!-- Jquery Ui CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    <!-- Theme Dark CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme-dark.css') }}" />
    <!-- RTL CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />

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
                <div>

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

    <!-- Blog Details Area -->
    <div class="blog-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">


                    <div class="blog-article">
                        <div class="blog-article-img">

                            <img src="{{ asset('storage/uploads/posts/' . $post->image) }}" alt="Images" />


                        </div>

                        <div class="blog-article-title">
                            <h2>{{ $post->title }}</h2>
                            <ul>
                                <li>
                                    <i class="bx bx-user"></i>
                                    {{ $post->user->name }}
                                </li>
                                <li>
                                    <i class="bx bx-calendar"></i>
                                    {{ $post->created_at->format('y/M/D') }}
                                </li>
                                <li>
                                    <i class="bx bx-show"></i>
                                    {{ $post->views }}
                                </li>
                                <li><i class="bx bx-time-alt-dots"></i>{{ $post->created_at->diffForHumans() }}</li>
                            </ul>
                        </div>

                        <div class="article-content">
                            <p>
                                {{ $post->content }}
                            </p>
                        </div>

                        <div class="comments-form">
                            <div class="contact-form">
                                <form id="contactrm" action="{{ Route('comment') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8">
                                            <div class="form-group">
                                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                                <textarea name='comment' class="form-control" id="message" cols="20" rows="2"
                                                    data-error="Write your message" placeholder="نظرتان را بنویسید"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4">
                                            <button type="submit" class="default-btn btn-bg-three">
                                                ارسال نظر
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="comments-wrap">
                            <h3 class="title">نظریات کاربران</h3>
                            @foreach ($post->comments as $item)
                                <ul class="my-2">
                                    <li>
                                        <img src="{{ asset('storage/userImg/' . $item->user->photo) }}"
                                            style="height: 40px; width: 40px; background-position: center; background-size: cover"
                                            alt="Image" />

                                        <h3> {{ $item->user->name }}</h3>
                                        <span>{{ $item->created_at->format('Y/m/d') }}</span>
                                        <span>{{ $item->created_at->diffForHumans() }}</span>
                                        <p>
                                            {{ $item->comment }}
                                        </p>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="side-bar-wrap">
                        @foreach ($NewPosts as $NewPost)
                            <a href="{{ Route('post.showSingle', $NewPost->slug) }}" class="read-btn">
                                <b>معلومات بیشتر</b>
                                <div class="side-bar-widget">
                                    <h3 class="title">آخرین خبر ها</h3>
                                    <div class="widget-popular-post">
                                        <article class="item">
                                            <a href='{{ Route('post.showSingle', $NewPost->slug) }}' class="thumb">
                                                <img style="height:80px"
                                                    src="{{ asset('storage/uploads/posts/' . $NewPost->image) }}"
                                                    alt="Images" />


                                            </a>
                                            <div class="info">
                                                <h4 class="title-text">
                                                    <a href="{{ Route('post.showSingle', $NewPost->slug) }}">
                                                        خبر عاجل: {{ $NewPost->title }}
                                                    </a>
                                                </h4>
                                                <ul>
                                                    <li>
                                                        <i class="bx bx-show-alt"></i>
                                                        {{ $NewPost->views }}
                                                    </li>
                                                    <li>
                                                        <i class="bx bx-message-square-detail"></i>
                                                        {{ $NewPost->comments->count() }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Area End -->

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
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap Bundle Min JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Magnific Popup Min JS -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Owl Carousel Min JS -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- Nice Select Min JS -->
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- Wow Min JS -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Jquery Ui JS -->
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <!-- Meanmenu JS -->
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <!-- Ajaxchimp Min JS -->
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <!-- Form Validator Min JS -->
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <!-- Contact Form JS -->
    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
