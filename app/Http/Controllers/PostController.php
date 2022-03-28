<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function hp_index()
    {
        return view('posts', [
            "judul" => 'My Blog',
            "postingannya" => Post::all()
        ]);
    }

    public function hp_postingan($slug)
    {
        return view('post', [
            "judul" => 'Single Postingan',
            "post" => Post::find($slug)
        ]);
    }
}
