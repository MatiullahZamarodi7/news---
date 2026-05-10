<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>User Profile</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'مطمئن هستی؟',
                text: "این عمل قابل برگشت نیست!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'بله، حذف کن!',
                cancelButtonText: 'نه، منصرف شدم',
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm-' + id).submit();
                }
            });
        }
    </script>

    <style>
        body {
            background: #121212;
            color: #fff;
        }

        .profile-card {
            background: rgb(255, 255, 255);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 0 4px rgba(0, 0, 0, 0.5);
        }

        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #0d6efd;
        }

        .post-card {
            background: #2a2a2a;
            height: 150px;
            border-radius: 10px;
            transition: 0.3s;
        }

        .post-card:hover {
            transform: scale(1.05);
            background: #0d6efd;
        }
    </style>


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

    <div class="container py-5 mt-3">

        @session('success')
            <div class="alert fade show dismissible alert-success mt-5">
                <p class="mb-1">{{ session('success') }}</p>
            </div>
        @endsession
        <!-- Profile -->
        <div class="profile-card mb-5" style="margin-top:80px;">
            <img src="{{ asset('storage/userImg/' . $user->photo) }}" class="profile-img mb-3" alt="">

            <h4>{{ $user->name }}</h4>
            <p class="text-muted">{{ $user->email }}</p>

            <a href="{{ Route('profile.edit') }}">
                <button class="btn btn-outline-primary btn-sm">Edit Profile</button>
            </a>
        </div>

        <!-- Posts -->
        <div class="row g-4">

            <div class="row pt-45">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <a href="{{ Route('post.showSingle', $post->slug) }}">
                                <img style="height: 270px; width: 100%;"
                                    src="{{ asset('storage/uploads/posts/' . $post->image) }}" alt="Images">
                            </a>
                            <div class="content">
                                <ul>
                                    <li><i class="bx bx-calendar"></i>{{ $post->created_at->format('Y/M/d') }}
                                    <li><i class="bx bx-user"></i>{{ $post->views }}</li>
                                    <li><i class="bx bx-message-alt-dots"></i>{{ $post->comments->count() }}</li>
                                    </li>
                                </ul>
                                <h5>
                                    <a
                                        href="{{ Route('post.showSingle', $post->slug) }}">{{ Str::limit($post->title, 20) }}</a>
                                </h5>
                                <i class="bx bx-time-alt-dots"></i>{{ $post->created_at->diffForHumans() }}
                                <p>
                                    {{ Str::limit($post->content, 60) }}
                                </p>
                                <div class="d-flex justify-content-between">

                                    <div>
                                        <a href="{{ Route('post.showSingle', $post->slug) }}" class="read-btn">جزئیات
                                        بیشتر</a>
                                    </div>


                                    <div class="d-flex">
                                        @if ((auth()->check() && auth()->user()->role == 'admin') || request()->routeIs('profile'))
                                            <form id="deleteForm-{{ $post->slug }}"
                                                action="{{ route('delete', $post->slug) }}" method="POST">

                                                @csrf
                                                @method('DELETE')

                                                <button type="button" class="btn btn-outline-danger"
                                                    onclick="confirmDelete('{{ $post->slug }}')">
                                                    delete
                                                </button>

                                            </form>
                                        @endif

                                       <div>
                                         <a href="{{ route('post.edit', $post->slug) }}"
                                            class="btn btn-outline-success ms-2 ">
                                            Edit
                                        </a>
                                       </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </div>





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
