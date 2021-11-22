<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;;

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
    return view("posts", [
        'posts' => Post::all(),
    ]);

    // return view('posts', [
    //     'posts' => Post::all(), 
    // ]);
});
Route::get('posts/{post}', function ($slug) {
    $post=Post::findOrFail($slug);
    return view('post', [
        'post' => $post,
    ]);
    // $path = __DIR__ . "/../resources/posts/{$slug}.html";

    // if (!file_exists($path)) {

    //     return redirect('/');
    // }
    // $post = cache()->remember("posts.{$slug}", 1200, fn () =>  file_get_contents($path));
    // return view('post', [
    //     'post' => $post,
    // ]);
});
