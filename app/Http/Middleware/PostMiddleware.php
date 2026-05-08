<?php

namespace App\Http\Middleware;

use App\Models\Post;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // گرفتن slug از route
        $slug = $request->route('slug');

        // پیدا کردن پست
        $post = Post::where('slug', $slug)->first();

        // اگر پست نبود
        if (!$post) {
            return response()->view('layouts.404', [], 404);
        }

        // اگر لاگین نبود
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // اگر صاحب پست نبود و ادمین هم نبود
        if (
            auth()->id() !== $post->user_id &&
            auth()->user()->role !== 'admin'
        ) {
            // return response()->view('layouts.404', [], 404);
            abort('404');
        }

        return $next($request);
    }
}
