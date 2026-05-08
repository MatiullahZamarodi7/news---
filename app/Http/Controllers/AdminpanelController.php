<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminpanelController extends Controller
{
    public function showAdminpanel()
    {
        $users = User::withTrashed()->get();
        // $users = User::all();
        $posts = Post::all();
        return view('layouts.AdminPanel', compact('users', 'posts'));
    }

    public function adminUserShow($id)
    {
        $user = User::findOrFail($id);
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


    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete($id);
        return redirect()->route('showAdminpanel')->with('success', 'پست با موفقیت حذف شد');
    }
}
