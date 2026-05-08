<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class editePost extends Controller
{
    public function editPost($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('layouts.editPost', compact('post'));
    }

    public function updatePost(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            // 'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // dd($request->all(), $request->file('image'));

        $imageName = $post->image; // عکس قبلی

        if ($request->hasFile('image')) {

            if ($post->image && Storage::disk('public')->exists('uploads/posts/' . $post->image)) {
                Storage::disk('public')->delete('uploads/posts/' . $post->image);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('uploads/posts', $imageName, 'public');
        }

        $post->update([
            'title' => $request->title,
            'slug' => $request->title,
            'content' => $request->content,
            // 'category_id' => $request->category_id,
            'image' => $imageName,
        ]);

        return redirect()->route('profile')->with('success', 'پوست با موفقیت ابدیت شد');
    }
}
