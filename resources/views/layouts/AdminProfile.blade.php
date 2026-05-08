<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>User Profile</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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


    <!-- Bootstrap RTL CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDeletePost(slug) {
            Swal.fire({
                title: 'مطمئن هستی؟',
                text: "این عمل قابل برگشت نیست!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'بله، حذف کن!',
                cancelButtonText: 'نه'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deletePost-' + slug).submit();
                }
            });
        }
    </script>


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

            <a href="{{ Route('AdminProfile', $user->id) }}">
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
                                <img style="height: 270px; width: 100%;" <img
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

                                    <a href="{{ Route('post.showSingle', $post->slug) }}" class="read-btn">جزئیات
                                        بیشتر</a>

                                    @if ((auth()->check() && auth()->user()->role == 'admin') || request()->routeIs('profile'))
                                        <form id="deletePost-{{ $post->slug }}" action="{{ Route('delete', $post->slug) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" onclick="confirmDeletePost('{{ $post->slug }}')" class="btn btn-outline-danger">delete</button>
                                        </form>
                                    @endif

                                    <a href="{{ route('post.edit', $post->slug) }}" class="btn btn-outline-success ">
                                        Edit
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </div>


    < <!-- Jquery Min JS -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Plugins -->
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
        <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>

        <!-- Custom -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        <!-- Custom JS -->
</body>

</html>
