<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // h : Halaman
    // p : postingan
    public function hp_index()
    {
        return view('posts', [
            "judul" => 'My Blog',
            "postingannya" => Post::all()
        ]);
    }

    // query menampilkan detail data
    public function hp_postingan(Post $post)
    {
        return view('post', [
            "judul" => 'Single Postingan',
            // "post" => Post::find($post)
            'post' => $post
        ]);
    }
}
