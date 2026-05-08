<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class editeProfile extends Controller
{
    public function editProfile()
    {
        $user = Auth::user();
        return view('layouts.editeProfile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
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

        return redirect()->route('profile')->with('success', 'شما با موفقیت پروفایل تان را ایدت کردید');
    }
}
