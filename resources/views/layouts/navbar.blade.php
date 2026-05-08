 <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
     <ul class="navbar-nav m-auto">
         <li class="nav-item">
             <a href="{{ Route('index') }}" class="nav-link active">
                 صفحه اصلی
             </a>
         </li>

         <li class="nav-item">
             <a href="{{ Route('news') }}" class="nav-link">
                 آخرین اخبار
             </a>
         </li>



         {{-- ----------------styles of news------------- --}}
         <style>
             .typeOfNews {
                 cursor: pointer;
                 position: relative;
                 list-style: none;
                 padding: 10px;
                 font-weight: bold;
             }

             #news {
                 display: none;
                 position: absolute;
                 top: 40px;
                 right: 0;
                 background: white;
                 min-width: 180px;
                 box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                 padding: 10px;
                 border-radius: 8px;
                 z-index: 1000;
             }

             #news li {
                 list-style: none;
                 margin: 5px 0;
             }

             #news a {
                 text-decoration: none;
                 color: black;
             }

             #news a:hover {
                 color: blue;
             }
         </style>

         <ul class="navbar-nav">

             <li class="nav-item typeOfNews">
                 نوع خبر

                 <ul id="news">
                     <li>
                         <a href="{{ Route('sportNews') }}">
                             اخبار ورزشی
                         </a>
                     </li>
                     <li>
                         <a href="{{ Route('siastNews') }}">
                             اخبار سیاسی
                         </a>
                     </li>
                     <li>
                         <a href="{{ Route('EconNews') }}">
                             اخبار اقتصادی
                         </a>
                     </li>
                     <li>
                         <a href="{{ Route('TechtNews') }}">
                             اخبار تکنالوژی
                         </a>
                     </li>
                 </ul>
             </li>

         </ul>

         <script>
             document.addEventListener("DOMContentLoaded", function() {
                 let typeOfNews = document.querySelector('.typeOfNews');
                 let news = document.querySelector('#news');

                 typeOfNews.addEventListener('mouseover', () => {
                     news.style.display = 'block';
                 });

                 typeOfNews.addEventListener('mouseleave', () => {
                     news.style.display = 'none';
                 });
             });
         </script>
         <li class="nav-item">
             <a href="{{ Route('about') }}" class="nav-link">
                 درباره ما
             </a>
         </li>
         <li class="nav-item">
             <a href="#" class="nav-link">
                 تماس با ما
             </a>
         </li>
     </ul>
     <div class="other-option">
         <div class="option-item d-in-line">
             <div style="display:flex; padding:10px;">
                 {{-- ----------------------style------------------------- --}}
                 <style>
                     .dropdown-menu {
                         display: none;
                         position: absolute;
                         top: 100%;
                         left: 0;
                         background: white;
                         max-width: fit-content;
                         list-style: none;
                     }

                     .dropdown-menu li a {
                         padding: 10px;
                     }

                     .dropdown:hover .dropdown-menu {
                         display: block;
                     }

                     .dropdown-menu li a:hover {
                         background: white;
                     }
                 </style>
                 {{-- ----------------------------------------------- --}}
                 @guest
                     <form method="POST" action="{{ route('logoutUser') }}">
                         @csrf
                         <div class="menu-icon">
                             <button type="submit"
                                 class="burger-menu menu-icon-one d-in-line btn btn-link p-0 border-0 bg-transparent">
                                 <i class="bx bx-log-in"></i>
                             </button>
                         </div>
                     </form>
                 @endguest
                 @auth()
                     <ul>
                         <li class="dropdown">
                             <a href="#">{{ auth()->user()->name }}</a>

                             <ul class="dropdown-menu">
                                 <li><a href="{{ Route('profile') }}">پروفایل</a></li>
                                 @if (auth()->check() && auth()->user()->role == 'admin')
                                     <li><a href="{{ Route('showAdminpanel') }}">پنیل ادمین</a></li>
                                 @endif
                                 <li class="nav-item">
                                     <a href="{{ Route('addPost') }}" class="nav-link">
                                         اضافه کردن پوست
                                     </a>
                                 </li>
                                 <li>
                                     <a href="#">
                                         <form method="POST" action="{{ route('logoutUser') }}">
                                             @csrf
                                             <div class="menu-icon">
                                                 <button type="submit"
                                                     class="burger-menu menu-icon-one d-in-line btn btn-link p-0 border-0 bg-transparent">
                                                     <i class="bx bx-log-in"></i>
                                                 </button>
                                             </div>
                                         </form>
                                     </a>
                                 </li>
                             </ul>
                         </li>
                     </ul>

                 </div>
             </div>
             <img style="border-radius: 50%; height: 40px; width: 40px;"
                 src='{{ asset('storage/userImg/' . auth()->user()->photo) }}' alt="">
         @endauth
     </div>
 </div>
