<?php

use App\Http\Controllers\AdminpanelController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\editePost;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\editeProfile;
use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'index'])->name('index');

Route::get('/news', [PostController::class, 'news'])->name('news')->middleware('auth');
Route::get('/sportNews', [PostController::class, 'sportNews'])->name('sportNews')->middleware('auth');
Route::get('/siastNews', [PostController::class, 'siastNews'])->name('siastNews')->middleware('auth');
Route::get('/TechNews', [PostController::class, 'TechNews'])->name('TechtNews')->middleware('auth');
Route::get('/EconNews', [PostController::class, 'EconNews'])->name('EconNews')->middleware('auth');

Route::get('/about', [PostController::class, 'about'])->name('about')->middleware('auth');

Route::get('/login', function () {
    return view('layouts.logout');
})->name('login');

Route::post('/login', [PostController::class, 'login'])->name('login.submit');

Route::get('/signUp', [PostController::class, 'signUp'])->name('signUp');
Route::get('/post/{slug}', [PostController::class, 'single'])->name('single');
Route::get('/post/{slug}', [PostController::class, 'showSingle'])->name('post.showSingle');

Route::post('/register', [UserController::class, 'register'])->name('register');

Route::fallback(function () {
    return view('layouts.404');
})->name('errorPage');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('login');
})->name('logoutUser');


Route::get('/addPostView', function () {
    return view('layouts.addPost');
})->name('addPost')->middleware('auth');

Route::post('/addPostView', [PostController::class, 'addPost'])->middleware('auth');
Route::post('/comment', [CommentController::class, 'comment'])->middleware('auth')->name('comment');

Route::get('/profile', [profileController::class, 'profile'])->name('profile')->middleware('auth');
Route::get('/editProfile', [editeProfile::class, 'editProfile'])->name('profile.edit')->middleware('auth');
Route::put('/profile/update', [editeProfile::class, 'update'])->name('profile.update')->middleware('auth');

Route::delete('/deletePost/{slug}', [PostController::class, 'deletePost'])->middleware(['auth', 'post.owner'])->name('delete');
Route::get('/post/{slug}/edit', [editePost::class, 'editPost'])->name('post.edit')->middleware(['auth', 'post.owner']);
Route::PUT('/post/{slug}', [editePost::class, 'updatePost'])->name('post.update')->middleware(['auth', 'post.owner']);

Route::middleware(['admin'])->group(function () {
    Route::get('/panelAdmin', [AdminpanelController::class, 'showAdminpanel'])->name('showAdminpanel')->middleware('auth');;
    Route::get('/admin/user/{id}', [AdminpanelController::class, 'adminUserShow'])->name('admin.user.show')->middleware('auth');;

    Route::get('/AdminProfile/{id}', [AdminpanelController::class, 'AdminProfile'])->name('AdminProfile')->middleware('auth');
    Route::PUT('/AdminProfileEdit/{id}', [AdminpanelController::class, 'AdminProfileEdit'])->name('AdminProfile.update')->middleware('auth');;

    Route::delete('/deleteUser/{user}', [AdminpanelController::class, 'deleteUser'])->middleware('auth')->name('deleteUser');
});
Route::get('/ali', function () {
    dd('maitullah zamarodi');
});
Route::get('recoverUser/{id}' , [UserController::class , 'recovery'])->name('userRecovery')->middleware('auth');