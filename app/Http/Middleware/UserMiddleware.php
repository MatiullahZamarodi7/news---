<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $id = $request->route('id');
        $user = User::find($id);

        if (!$user) {
            abort(404);
        }

        // اگر صاحب پروفایل نبود و ادمین هم نبود
        if (
            auth()->id() !== $user->id &&
            auth()->user()->role !== 'admin'
        ) {
            abort(403);
        }

        return $next($request);
    }
}
