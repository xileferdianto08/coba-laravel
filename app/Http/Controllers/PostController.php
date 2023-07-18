<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index() {
        return view('posts', [
            "title" => "All Posts",
            //"post" => Post::all(),

            //penggunaan with() ini buat mengurangi N+1 problem. ini disebut dngn eager loading, ref https://laravel.com/docs/10.x/eloquent-relationships#eager-loading
            "posts" => Post::with(['author', 'category'])->latest()->get()
        ]);
    }

    //Post $post adalah route model binding yg memudahkan kita untuk dapetin data tertentu tanpa harus querying
    //Post -> model
    //$post -> variabel yng dikirim dari routes/web.php
    public function show(Post $post) {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
