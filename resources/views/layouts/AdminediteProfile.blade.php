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
    <div class="container py-5">




        <form action="{{ Route('AdminProfile.update', $user->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- Profile -->
            <div class="profile-card mb-5" style="margin-top:80px;">
                <img src="{{ asset('storage/userImg/' . $user->photo) }}" class="profile-img mb-3" alt="">

                <h4> <input type="text" name="name" value="{{ $user->name }}"></h4>
                <input name="email" type="text" value="{{ $user->email }}">
                <input type="file" name="photo" class="form-control mt-3">

                <button class="btn btn-outline-success btn-sm mt-3">Edit Profile</button>
            </div>
        </form>



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
</body>

</html>
