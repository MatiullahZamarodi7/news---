<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام | سیستم خبری</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">
</head>

<body>

    <!-- Navbar -->
    <div class="navbar-area">
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('assets/img/logo.png') }}" width="100">
                    </a>
                </nav>
            </div>
        </div>
    </div>

    <!-- Register Area -->
    <div class="sign-in-area pt-100 pb-70" style="padding-top:160px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <div class="user-all-form">
                        <div class="contact-form">

                            <div class="section-title text-center mb-4">
                                <span class="sp-color">ثبت نام در سایت</span>
                                <h2>اکنون حساب تان را ایجاد کنید</h2>
                            </div>

                            <!-- Errors -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <p class="mb-1">{{ $error }}</p>
                                    @endforeach
                                </div>
                            @endif

                            <!-- Success -->
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <!-- Form -->
                            <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group mb-3">
                                    <input type="text" name="name" value="{{ old('name') }}"
                                        class="form-control" placeholder="نام و نام خانوادگی تان را وارد کنید">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="form-control" placeholder="ایمیل تان را وارد کنید">
                                </div>

                                <div class="form-group mb-3">
                                    <input type="file" name="photo" value="{{ old('photo') }}"
                                        class="form-control" placeholder=" عکس تان را اضافه کنید">
                                </div>

                                <div class="form-group mb-3">
                                    <input type="password" name="password" class="form-control"
                                        placeholder="رمز عبورتان را وارد کنید">
                                </div>

                                <div class="form-group mb-3">
                                    <input type="password" name="password_confirmation" class="form-control"
                                        placeholder="رمز عبورتان را تایید کنید">
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="default-btn btn-bg-three border-radius-5">
                                        ایجاد حساب
                                    </button>
                                </div>

                                <div class="text-center mt-3">
                                    <p>
                                        حساب کاربری دارید؟
                                        <a href="{{ route('login') }}">ورود به حساب</a>
                                    </p>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
