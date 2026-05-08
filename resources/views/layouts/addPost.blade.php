<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post UI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f5f7fb;
            font-family: tahoma, sans-serif
        }

        .card-box {
            border: none;
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08)
        }

        .form-control,
        .form-select {
            border-radius: 14px;
            padding: .8rem 1rem
        }

        .btn-main {
            border-radius: 14px;
            padding: .8rem 1rem;
            font-weight: 700
        }

        .hero-title {
            font-weight: 800
        }
    </style>
</head>

<body>

    


    <form action="{{ route('addPost') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9 col-xl-8">

                    {{-- Error Messages --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Success Message --}}
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="card card-box p-4 p-md-5">
                        <h2 class="hero-title mb-4 text-center">افزودن پُست جدید</h2>

                        <div class="row g-3">

                            <div class="col-6">
                                <label class="form-label">عنوان پست</label>
                                <input type="text" name="title" class="form-control" value="{{ old('title') }}"
                                    placeholder="عنوان را وارد کنید">
                            </div>


                            <div class="col-12 col-md-6">
                                <label class="form-label">دسته بندی</label>
                                <select name="category_id" class="form-select">
                                    <option value="">انتخاب دسته بندی</option>
                                    <option value="1">سیاسی</option>
                                    <option value="2">ورزشی</option>
                                    <option value="3">تکنالوژی</option>
                                    <option value="4">اقتصادی</option>

                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label">متن پست</label>
                                <textarea name="content" class="form-control" rows="6" placeholder="متن کامل پست...">{{ old('content') }}</textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label">عکس شاخص</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="col-12 d-grid mt-2">
                                <button type="submit" class="btn btn-primary btn-main">
                                    ثبت پست
                                </button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
</body>

</html>
