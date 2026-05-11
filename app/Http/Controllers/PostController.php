<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::latest('id')->first();
        return view('layouts.index', compact('post'));
    }

    public function news()
    {
        $posts = Post::with('user')
            ->whereHas('user')
            ->get();
        return view('layouts.news', compact('posts'));
    }

    public function sportNews()
    {
        $posts = Post::with('user')
            ->whereHas('user')
            ->where('category_id', '2')->get();

        return view('layouts.sportNews', compact('posts'));
    }
    public function siastNews()
    {
        $posts = Post::with('user')
            ->whereHas('user')
            ->where('category_id', '1')->get();
        return view('layouts.siastNews', compact('posts'));
    }
    public function TechNews()
    {
        $posts = Post::with('user')
            ->whereHas('user')
            ->where('category_id', '3')->get();
        return view('layouts.TechNews', compact('posts'));
    }
    public function EconNews()
    {
        $posts = Post::with('user')
            ->whereHas('user')
            ->where('category_id', '4')->get();
        return view('layouts.EconNews', compact('posts'));
    }

    public function about()
    {
        return view('layouts.about');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'password' =>  'required'
        ]);
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return redirect()->back()->with('wrongPass', 'ایمیل درست نمیباشد!');
        }
        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('wrongPass', 'رمز عبور درست نمیباشد!');
        }
        Auth::login($user);
        return redirect()->route('index')->with('success', "سلام $user->name خوش آمدید!");
    }

    public function single($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $NewPosts = Post::latest()->take(5)->get();
        return view('layouts.single');
    }

    public function signUp()
    {
        return view('layouts.signUp');
    }

    //برای نمایش همه پست ها



    function showSingle($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $NewPosts = Post::limit(6)->orderBy('views', 'desc')->get();
        // $post->increment('views');

        $key = 'viewd_post_' . $post->id;
        if (!session()->has($key)) {
            $post->increment('views');
            session()->put($key, true);
        };
        return view('layouts.single', compact('post', 'NewPosts'));
    }




    // add post

    public function addPost(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'content'     => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('uploads/posts', $imageName, 'public', $imageName);
        }

        Post::create([
            'title'       => $request->title,
            'slug'        => $request->title,
            'content'     => $request->content,
            'category_id' => $request->category_id,
            'image'       => $imageName,
            'user_id'     => auth()->id(),
        ]);

        return redirect()->route('news')->with('success', 'شما موفقانه پست کردین');
    }


    public function deletePost($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->delete();
        return redirect()->route('news')->with('success', 'پست با موفقیت حذف شد');
    }
}
