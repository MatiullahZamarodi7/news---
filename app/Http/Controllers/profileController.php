<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class profileController extends Controller
{
   public function profile(){
    $user = Auth::user();
    $posts = $user->posts;

    return view('layouts.profile', compact('user', 'posts'));
}
}
