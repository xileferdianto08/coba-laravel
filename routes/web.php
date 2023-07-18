<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});



Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Felix Ferdianto",
        "email" => "felixferdianto13@gmail.com",
        "image" => "ya.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);
//klo pake posts/{post} doang dia defaultnya manggil si id doang

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "Post By Category: $category->name",
        'posts' => $category->posts->load('category', 'author'),
        'category' => $category->name
    ]);
});


Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Post By Author: $author->name",
        //penggunaan load() sendiri adalah alt nya with() yang sedang menggunakan role binding param. ini disebut dengan lazy eager loading
        'posts' => $author->posts->load('category', 'author'),
        // 'category' => $category->name
    ]);
});