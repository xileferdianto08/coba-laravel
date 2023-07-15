<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index() {
        return view('posts', [
            "title" => "Post",
            "post" => Post::all()
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
