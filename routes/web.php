<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "judul" => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "judul" => 'About'
    ]);
});

Route::get('/blog', [PostController::class, 'hp_index']);

Route::get('posts/{slug}', [PostController::class, 'hp_postingan']);



// buat user login, dll
Route::get('/pengguna', function () {
    return view('pengguna', [
        "name" => "Fairuz Musyaffa",
        "email" => "fairuz@gmail.com",
        "gambar" => "kucing.jpg"
    ]);
});
