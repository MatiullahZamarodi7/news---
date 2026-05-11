<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class AdminpanelController extends Controller
{
    use AuthorizesRequests;
    public function showAdminpanel()
    {
        $users = User::withTrashed()->get();

        $posts = Post::with('user')
            ->whereHas('user')
            ->get();

        return view('layouts.AdminPanel', compact('users', 'posts'));
    }

    public function adminUserShow($id)
    {
        $user = User::findOrFail($id);

        // فقط ادمین یا خود یوزر اجازه دارد
        if (
            auth()->user()->role !== 'admin' &&
            auth()->id() !== $user->id
        ) {
            abort(404);
        }

        $posts = $user->posts;

        return view('layouts.adminProfile', compact('user', 'posts'));
    }

    public function AdminProfile($id)
    {
        $user = User::findOrFail($id);
        return view('layouts.adminediteProfile', compact('user'));
    }



    public function AdminProfileEdit(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = time() . ' . ' . $file->getClientOriginalExtension();
            $file->storeAs('userImg', $fileName, 'public');

            $user->photo = $fileName;
        }
        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return redirect()->route('admin.user.show', $user->id)->with('success', 'شما با موفقیت پروفایل تان را ایدت کردید');
    }



    public function deleteUser(User $user)
    {
        try {
            $this->authorize('delete', $user);
            $user->delete($user);
            return redirect()->route('showAdminpanel')->with('success', 'یوزیر با موفقیت حذف شد');
        } catch (AuthorizationException  $e) {
            return redirect()->route('showAdminpanel')->with('success', "این ادمین است نمی توانید انرا دلیت کنید!");
        }
    }
}
