<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:2|confirmed',
            'photo' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ]);
        $imageName = time() . '.' . $request->photo->extension();
        $request->photo->storeAs('userImg', $imageName , 'public');

        $addUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'photo' => $imageName
        ]);
        // dd($addUser);
        return redirect()->route('login')->with('success', 'Registration successful! You can now log in.');
    }

    public function recovery($id){
        $user = User::withTrashed()->find($id)->restore();
        return redirect()->route('showAdminpanel')->with('success' , "یوزر با موفقیت ریکاویری شد !");
    }
}
