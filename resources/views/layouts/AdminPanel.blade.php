<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>پنل ادمین فوق‌العاده</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/css/telwendCSS-Files/telwend.js') }}"></script>


    <!-- Bootstrap RTL CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['system-ui', 'Tahoma', 'Vazirmatn', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>




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

<body class="bg-gray-100 font-sans ">

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
        {{-- <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img style="width: 100px" src="assets/img/logo.png" class="logo-one" alt="Logo" />
                <img style="width: 100px" src="assets/img/logo.png" class="logo-two" alt="Logo" />
            </a>
        </div> --}}

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


    <div class="flex h-screen mt-5">


        <!-- ========== محتوای اصلی ========== -->
        <main class="flex-1 overflow-y-auto mt-5">
            @session('success')
                <div class="alert fade show dismissible alert-success mt-5">
                    <p class="mb-1">{{ session('success') }}</p>
                </div>
            @endsession

            <!-- هدر موبایل -->
            <header class="lg:hidden bg-indigo-800 text-white sticky top-0 z-20 shadow-lg">
                <div class="px-4 py-3 flex justify-between items-center">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-crown text-yellow-400 text-xl"></i>
                        <h1 class="text-lg font-bold">پنل ادمین فوق‌العاده</h1>
                    </div>
                    <button id="mobileMenuBtn" class="text-white text-2xl">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </header>

            <!-- محتوای صفحه -->
            <div class="p-4 md:p-6">

                <!-- عنوان صفحه و خوش‌آمدگویی -->
                <div class="mb-6">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800">داشبورد</h2>
                    <p class="text-gray-500 mt-1">خوش آمدید، {{ auth()->user()->name }}! 👋</p>
                </div>

                <!-- کارت‌های آماری -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-8">
                    <!-- کارت ۱: کاربران -->
                    <div
                        class="bg-white rounded-2xl shadow-md p-5 border-r-4 border-indigo-600 hover:shadow-lg transition cursor-pointer">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-500 text-sm mb-1">کل کاربران</p>
                                <p class="text-3xl font-bold text-gray-800">{{ $users->count() }}</p>
                                <p class="text-green-600 text-xs mt-2"><i class="fas fa-arrow-up"></i> +۱۲٪ نسبت به ماه
                                    قبل</p>
                            </div>
                            <div class="bg-indigo-100 p-3 rounded-xl">
                                <i class="fas fa-users text-indigo-600 text-2xl"></i>
                            </div>
                        </div>
                    </div>

                    <!-- کارت ۲: پست‌ها -->
                    <div
                        class="bg-white rounded-2xl shadow-md p-5 border-r-4 border-green-600 hover:shadow-lg transition cursor-pointer">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-500 text-sm mb-1">کل پست‌ها</p>
                                <p class="text-3xl font-bold text-gray-800">{{ $posts->count() }}</p>
                                <p class="text-green-600 text-xs mt-2"><i class="fas fa-arrow-up"></i> +۸ پست جدید</p>
                            </div>
                            <div class="bg-green-100 p-3 rounded-xl">
                                <i class="fas fa-newspaper text-green-600 text-2xl"></i>
                            </div>
                        </div>
                    </div>

                    <!-- کارت ۳: کاربران بن شده -->
                    <div
                        class="bg-white rounded-2xl shadow-md p-5 border-r-4 border-red-600 hover:shadow-lg transition cursor-pointer">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-500 text-sm mb-1">کاربران بن شده</p>
                                <p class="text-3xl font-bold text-gray-800">
                                    {{ \App\Models\User::onlyTrashed()->count() }}</p>
                                <p class="text-red-600 text-xs mt-2"><i class="fas fa-arrow-down"></i> -۳ نسبت به ماه
                                    قبل</p>
                            </div>
                            <div class="bg-red-100 p-3 rounded-xl">
                                <i class="fas fa-ban text-red-600 text-2xl"></i>
                            </div>
                        </div>
                    </div>

                    <!-- کارت ۴: بازدید امروز -->
                    <div
                        class="bg-white rounded-2xl shadow-md p-5 border-r-4 border-amber-600 hover:shadow-lg transition cursor-pointer">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-500 text-sm mb-1">بازدید امروز</p>
                                <p class="text-3xl font-bold text-gray-800">{{ $posts->sum('views') }}</p>
                                <p class="text-amber-600 text-xs mt-2">آخرین آمار</p>
                            </div>
                            <div class="bg-amber-100 p-3 rounded-xl">
                                <i class="fas fa-chart-line text-amber-600 text-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- جدول آخرین کاربران -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden mb-8">
                    <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                        <h3 class="font-bold text-gray-800">آخرین کاربران ثبت‌نام شده</h3>
                        <a href="#" class="text-indigo-600 text-sm hover:underline">مشاهده همه</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">کاربر
                                    </th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">ایمیل
                                    </th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">نقش
                                    </th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">تعداد
                                        پوست ها
                                    </th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">
                                        دلیت شده
                                    </th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">تاریخ
                                        ثبت</th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">تاریخ
                                        ادیت</th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">دلیت
                                        کردن</th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">ایدیت
                                        کردن</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach ($users as $user)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-8 h-8 bg-indigo-100 rounded-full flex items-center justify-center">
                                                    <img src="{{ asset('storage/userImg/' . $user->photo) }}"
                                                        alt="">
                                                </div>


                                                <span class="font-medium">{{ $user->name }}</span>

                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-gray-600">{{ $user->email }}</td>
                                        <td class="px-6 py-4"><span
                                                class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">
                                                {{ $user->role }}
                                            </span></td>
                                        <td class="px-6 py-4"><span
                                                class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">{{ $user->posts->count() }}</span>
                                        </td>
                                        <td class="px-6 py-4 text-gray-500 text-sm">
                                            {{ $user->deleted_at ? $user->deleted_at->diffForHumans() : 'Active' }}
                                        </td>
                                        <td class="px-6 py-4 text-gray-500 text-sm">
                                            {{ $user->created_at->diffForHumans() }}</td>
                                        <td class="px-6 py-4 text-gray-500 text-sm">
                                            {{ $user->updated_at->diffForHumans() }}</td>
                                        <td class="px-6 py-4">
                                            <form id="deleteForm-{{ $user->id }}"
                                                action="{{ Route('deleteUser', $user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                @if ($user->deleted_at)
                                                    <a href="{{ Route('userRecovery' , $user->id) }}">
                                                        <span class="text-danger" style="cursor: pointer;">♻️</span>
                                                    </a>
                                                @else
                                                    <button type="button"
                                                        onclick="confirmDelete({{ $user->id }})">
                                                        🗑️
                                                    </button>
                                                @endif
                                            </form>
                                        </td>
                                        <td class="px-6 py-4">
                                            @if ($user->deleted_at)
                                                <span class="text-danger">Die</span>
                                            @else
                                                <a href="{{ route('admin.user.show', $user->id) }}">
                                                    <span style="cursor: pointer">✏️</span>
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- کارت‌های پست‌های اخیر -->
                <h3 class="font-bold text-gray-800 text-lg mb-4">آخرین پست‌ها</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                    @foreach ($posts as $post)
                        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                            <div class="h-26"><img style="height: 300px; width: 100%;"
                                    src="{{ asset('storage/uploads/posts/' . $post->image) }}" alt=""></div>
                            <div class="p-4">
                                <h4 class="font-bold text-gray-800 mb-2">{{ $post->title }}</h4>
                                <p class="text-gray-600 text-sm">{{ Str::limit($post->content, 60) }}</p>
                                <div class="flex justify-between items-center mt-4">
                                    <span class="text-xs text-gray-400"><i class="fas fa-calendar ml-1"></i>
                                        {{ $post->created_at->diffForHumans() }}</span>
                                    <span
                                        class="text-xs bg-gray-100 px-2 py-1 rounded-full">{{ $post->user->name ?? 'Unknown' }}</span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="{{ Route('post.showSingle', $post->slug) }}"
                                        class="btn btn-outline-info ms-3 my-2">جزئیات
                                        بیشتر</a>
                                </div>
                                <div class="d-flex">
                                    <form id="deletePost-{{ $post->slug }}"
                                        action="{{ route('delete', $post->slug) }}" method="POST">

                                        @csrf
                                        @method('DELETE')

                                        <button type="button" onclick="confirmDeletePost('{{ $post->slug }}')"
                                            class="btn btn-outline-danger mt-2 me-2">
                                            delete
                                        </button>

                                    </form>
                                    <a href="{{ route('post.edit', $post->slug) }}"
                                        class="btn btn-outline-success me-3 my-2">
                                        Edit
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        </main>
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
