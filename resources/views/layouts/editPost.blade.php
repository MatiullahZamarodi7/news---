<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>امی ادیتور | عکس، تایتل، متن و کتیگوری</title>
    <!-- Font Awesome 6 (Free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Font Vazir (ظاهر شیک و خوانا) -->
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #fef7f0;
            font-family: 'Vazirmatn', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
        }

        /* کانتینر اصلی با الهام از سبک امی (نرم، گرد و ارگانیک) */
        .yummy-container {
            max-width: 1100px;
            width: 100%;
            margin-top: 130px;
            background: #ffffff;
            border-radius: 2.5rem;
            box-shadow: 0 25px 45px rgba(0, 0, 0, 0.08), 0 5px 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        /* هدر نرم و گرم */
        .yummy-header {
            background: #ffffff;
            padding: 1.3rem 2rem;
            border-bottom: 2px solid #ffdec2;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }

        .logo-area h2 {
            font-size: 1.9rem;
            font-weight: 800;
            background: linear-gradient(125deg, #e86f2c, #f7a55a);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            letter-spacing: -0.5px;
        }

        .logo-area p {
            font-size: 0.7rem;
            color: #c28146;
            font-weight: 500;
            margin-top: 4px;
        }

        .mini-badge {
            background: #ffe8d6;
            padding: 0.4rem 1.2rem;
            border-radius: 50px;
            color: #c46a2b;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .mini-badge i {
            margin-left: 6px;
        }

        /* بدنه اصلی با دو بخش */
        .yummy-body {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            padding: 2rem;
        }

        /* بخش ابزارهای ادیت (فقط ۴ گزینه) */
        .edit-area {
            flex: 1;
            min-width: 260px;
            background: #fefaf5;
            border-radius: 1.8rem;
            padding: 1.8rem;
            border: 1px solid #ffefdf;
        }

        .edit-group {
            margin-bottom: 2rem;
        }

        .edit-group label {
            display: flex;
            align-items: center;
            gap: 0.7rem;
            font-weight: 700;
            color: #7a4c2c;
            margin-bottom: 0.7rem;
            font-size: 0.9rem;
        }

        .edit-group label i {
            font-size: 1.2rem;
            color: #e86f2c;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 0.85rem 1rem;
            border: 1.5px solid #ffe1c4;
            border-radius: 1.2rem;
            font-family: 'Vazirmatn', sans-serif;
            font-size: 0.9rem;
            background: white;
            transition: all 0.2s;
            resize: vertical;
            color: #2d2a24;
        }

        select {
            cursor: pointer;
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #f7a55a;
            box-shadow: 0 0 0 3px rgba(247, 165, 90, 0.2);
        }

        /* استایل آپلود فایل (دکمه زیبا) */
        .upload-zone {
            border: 2px dashed #ffcf9a;
            border-radius: 1.8rem;
            padding: 1rem;
            text-align: center;
            cursor: pointer;
            background: #fff6ed;
            transition: 0.2s;
            margin-top: 0.2rem;
        }

        .upload-zone:hover {
            background: #ffe6d4;
            border-color: #e86f2c;
        }

        .upload-zone i {
            font-size: 2rem;
            color: #e86f2c;
            margin-bottom: 0.5rem;
            display: block;
        }

        .upload-zone span {
            font-size: 0.8rem;
            color: #b45f2b;
            font-weight: 500;
        }

        #coverUpload {
            display: none;
        }

        .preview-thumb {
            margin-top: 0.8rem;
            display: flex;
            justify-content: center;
        }

        .img-preview-small {
            max-width: 100%;
            max-height: 80px;
            border-radius: 1rem;
            border: 2px solid #ffdec2;
            display: none;
            object-fit: cover;
        }

        /* پنل پیش‌نمایش پوستر (با طراحی نرم و شیک) */
        .preview-area {
            flex: 1.2;
            min-width: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .post-card {
            width: 100%;
            max-width: 380px;
            background: white;
            border-radius: 2rem;
            overflow: hidden;
            box-shadow: 0 20px 35px -10px rgba(0, 0, 0, 0.15);
            transition: all 0.2s ease;
            margin-bottom: 1.2rem;
            border: 1px solid #ffebdb;
        }

        .post-cover {
            width: 100%;
            height: 250px;
            background-size: cover;
            background-position: center;
            background-color: #fae4cf;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.2s;
        }

        .cover-placeholder {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            color: #c28753;
            font-size: 0.8rem;
        }

        .cover-placeholder img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
        }

        .cover-placeholder i {
            font-size: 2.5rem;
            opacity: 0.7;
        }

        .post-content {
            padding: 1.3rem 1.3rem 1.5rem;
            background: white;
        }

        .post-category {
            font-size: 0.7rem;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 1px;
            color: #e86f2c;
            margin-bottom: 0.5rem;
            display: inline-block;
            background: #fff0e4;
            padding: 0.2rem 0.8rem;
            border-radius: 30px;
        }

        .post-title {
            font-size: 1.5rem;
            font-weight: 800;
            color: #2c241a;
            margin-bottom: 0.7rem;
            line-height: 1.3;
        }

        .post-description {
            font-size: 0.85rem;
            color: #5f4a33;
            line-height: 1.6;
            margin-bottom: 0.8rem;
        }

        .post-meta {
            display: flex;
            justify-content: flex-start;
            gap: 1rem;
            border-top: 1px solid #ffe0ca;
            padding-top: 0.8rem;
            font-size: 0.7rem;
            color: #bb8b60;
        }

        /* دکمه دانلود ساده اما شیک */
        .btn-download {
            background: #e86f2c;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 2rem;
            color: white;
            font-weight: 700;
            font-family: 'Vazirmatn';
            cursor: pointer;
            transition: 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            justify-content: center;
            width: 100%;
            max-width: 380px;
            font-size: 0.9rem;
            margin-top: 0.5rem;
            box-shadow: 0 5px 12px rgba(232, 111, 44, 0.3);
        }

        .btn-download:hover {
            background: #cd5819;
            transform: translateY(-2px);
        }

        .btn-reset {
            background: #f0e0d2;
            color: #a5612e;
            box-shadow: none;
            margin-top: 0.8rem;
        }

        .btn-reset:hover {
            background: #e6d2c0;
            transform: translateY(-1px);
        }

        .btn-submit {
            background: #e86f2c;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 2rem;
            color: white;
            font-weight: 700;
            font-family: 'Vazirmatn';
            cursor: pointer;
            transition: 0.2s;
            width: 100%;
            font-size: 0.9rem;
            margin-top: 1rem;
        }

        .btn-submit:hover {
            background: #cd5819;
        }

        /* ریسپانسیو */
        @media (max-width: 780px) {
            .yummy-body {
                padding: 1.2rem;
            }

            .post-card {
                max-width: 100%;
            }
        }

        small {
            color: #bf8f64;
        }

        footer {
            padding: 1rem 2rem 1.5rem;
            text-align: center;
            font-size: 0.7rem;
            color: #cfa67b;
            border-top: 1px solid #ffefdf;
        }

        .d-flex {
            display: flex;
        }

        .w-100 {
            width: 100%;
        }
    </style>

    <!-- Required Meta Tags -->


    <!-- Bootstrap RTL CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">

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



    <div class="yummy-container">
        <form action="{{ Route('post.update', $post->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="yummy-body">
                <!-- بخش کنترل ها -->
                <div class="edit-area">
                    <!-- 1. آپلود عکس -->
                    <div class="edit-group">
                        <label><i class="fas fa-camera-retro"></i> عکس کاور</label>
                        <div class="upload-zone" id="uploadZone">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <span>برای آپلود کلیک کنید یا عکس را بکشید</span>
                        </div>
                        <input type="file" name="image" id="coverUpload"
                            accept="image/jpeg, image/png, image/webp, image/jpg">
                        <div class="preview-thumb">
                            <img id="thumbPreview" class="img-preview-small" alt="preview">
                        </div>
                        <small style="display:block; margin-top: 8px;">*.jpg, .png, .webp</small>
                    </div>

                    <!-- 2. تایتل (عنوان) -->
                    <div class="edit-group">
                        <label><i class="fas fa-heading"></i> تایتل / عنوان</label>
                        <input type="text" name="title" id="titleInput" placeholder="مثال: عصر جدید خلاقیت"
                            value="{{ $post->title }}">
                    </div>

                    <!-- 3. متن توضیحات -->
                    <div class="edit-group">
                        <label><i class="fas fa-align-left"></i> متن پوستر</label>
                        <textarea id="descInput" name="content" rows="3" placeholder="متن اصلی پست شما ...">{{ $post->content }}</textarea>
                    </div>

                    <!-- 4. کتیگوری -->
                    <div class="edit-group">
                        <label><i class="fas fa-tag"></i> کتیگوری (دسته‌بندی)</label>
                        <select id="categoryInput">
                            <option value="✨ الهام‌بخش" selected>✨ الهام‌بخش</option>
                            <option value="📰 سیاسی">📰 سیاسی</option>
                            <option value="⚽ ورزشی">⚽ ورزشی</option>
                            <option value="💻 تکنولوژی">💻 تکنولوژی</option>
                            <option value="📊 اقتصادی">📊 اقتصادی</option>
                        </select>
                    </div>

                    <button type="submit" class="btn-submit" id="submitBtn">ارسال اطلاعات</button>
                </div>

                <!-- بخش پیش‌نمایش زنده پوستر -->
                <div class="preview-area">
                    <div class="post-card" id="livePostCard">
                        <div class="post-cover" id="postCover">
                            <div class="cover-placeholder" id="coverPlaceholder">
                                <img style="height: 270px; width: 100%;"
                                    src="{{ asset('storage/uploads/posts/' . $post->image) }}" alt="Images" />
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="post-category" id="categoryText">✨ الهام‌بخش</div>
                            <div class="post-title" id="titleText">{{ $post->title }}</div>
                            <div class="post-description" id="descText">{{ $post->content }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <footer>
            <i class="fas fa-edit"></i> عکس، تایتل، متن و کتیگوری را تغییر بده — پیش‌نمایش زنده
        </footer>
    </div>






    <!-- Jquery Min JS -->
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







    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script>
        (function() {
            const coverUploadInput = document.getElementById('coverUpload');
            const uploadZone = document.getElementById('uploadZone');
            const titleInput = document.getElementById('titleInput');
            const descInput = document.getElementById('descInput');
            const categoryInput = document.getElementById('categoryInput');
            const resetBtn = document.getElementById('resetBtn');
            const downloadBtn = document.getElementById('downloadPostBtn');
            const submitBtn = document.getElementById('submitBtn');

            const postCoverDiv = document.getElementById('postCover');
            const coverPlaceholder = document.getElementById('coverPlaceholder');
            const categoryTextSpan = document.getElementById('categoryText');
            const titleTextSpan = document.getElementById('titleText');
            const descTextSpan = document.getElementById('descText');
            const thumbPreview = document.getElementById('thumbPreview');

            let currentImageData = null;

            const defaultValues = {
                title: "لذت لحظه‌های ناب",
                desc: "زندگی پر از رنگ‌های جذاب است. هر روز فرصتی برای خلق زیبایی‌ها...",
                category: "✨ الهام‌بخش",
                image: null
            };

            function updatePreview() {
                titleTextSpan.innerText = titleInput.value.trim() !== "" ? titleInput.value : "بدون عنوان";
                descTextSpan.innerText = descInput.value.trim() !== "" ? descInput.value :
                    "متن شما اینجا نمایش داده می‌شود...";
                categoryTextSpan.innerText = categoryInput.value.trim() !== "" ? categoryInput.value : "دسته‌بندی";

                if (currentImageData) {
                    postCoverDiv.style.backgroundImage = `url('${currentImageData}')`;
                    postCoverDiv.style.backgroundSize = "cover";
                    postCoverDiv.style.backgroundPosition = "center";
                    postCoverDiv.style.backgroundColor = "transparent";
                    coverPlaceholder.style.display = "none";
                    thumbPreview.src = currentImageData;
                    thumbPreview.style.display = "block";
                } else {
                    postCoverDiv.style.backgroundImage = "none";
                    postCoverDiv.style.backgroundColor = "#fae4cf";
                    coverPlaceholder.style.display = "flex";
                    thumbPreview.style.display = "none";
                    thumbPreview.src = "";
                }
            }

            function handleImageFile(file) {
                if (!file) return;
                const reader = new FileReader();
                reader.onload = function(e) {
                    currentImageData = e.target.result;
                    updatePreview();
                };
                reader.readAsDataURL(file);
            }

            uploadZone.addEventListener('click', () => {
                coverUploadInput.click();
            });
            coverUploadInput.addEventListener('change', (e) => {
                if (e.target.files && e.target.files[0]) {
                    handleImageFile(e.target.files[0]);
                }
            });

            uploadZone.addEventListener('dragover', (e) => {
                e.preventDefault();
                uploadZone.style.background = "#ffebdb";
            });
            uploadZone.addEventListener('dragleave', () => {
                uploadZone.style.background = "#fff6ed";
            });
            uploadZone.addEventListener('drop', (e) => {
                e.preventDefault();
                uploadZone.style.background = "#fff6ed";
                const files = e.dataTransfer.files;
                if (files.length > 0 && files[0].type.startsWith('image/')) {
                    handleImageFile(files[0]);
                } else {
                    alert("لطفاً یک فایل تصویری انتخاب کنید.");
                }
            });

            titleInput.addEventListener('input', updatePreview);
            descInput.addEventListener('input', updatePreview);
            categoryInput.addEventListener('change', updatePreview);

            function resetToDefault() {
                titleInput.value = defaultValues.title;
                descInput.value = defaultValues.desc;
                categoryInput.value = defaultValues.category;
                currentImageData = defaultValues.image;
                coverUploadInput.value = "";
                updatePreview();
                if (!currentImageData) {
                    coverPlaceholder.style.display = "flex";
                    postCoverDiv.style.backgroundImage = "none";
                    thumbPreview.style.display = "none";
                }
            }

            resetBtn.addEventListener('click', resetToDefault);

            function downloadPostAsImage() {
                if (typeof html2canvas === 'undefined') {
                    alert("خطا: کتابخانه html2canvas بارگذاری نشد.");
                    return;
                }
                const element = document.getElementById('livePostCard');
                html2canvas(element, {
                    scale: 2.8,
                    backgroundColor: '#ffffff',
                    useCORS: true,
                    logging: false,
                    allowTaint: false
                }).then(canvas => {
                    const link = document.createElement('a');
                    link.download = 'poster_ami_style.png';
                    link.href = canvas.toDataURL('image/png');
                    link.click();
                }).catch(err => {
                    console.error(err);
                    alert("خطا در ذخیره تصویر.");
                });
            }

            downloadBtn.addEventListener('click', downloadPostAsImage);

            submitBtn.addEventListener('click', () => {
                alert("اطلاعات ارسال شد!\nعنوان: " + titleInput.value + "\nدسته: " + categoryInput.value);
            });

            resetToDefault();
        })();
    </script>
</body>

</html>
