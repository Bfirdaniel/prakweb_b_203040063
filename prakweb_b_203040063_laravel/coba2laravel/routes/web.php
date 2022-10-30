<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;


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
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Billy Firdaniel",
        "email" => "Bfirdaniel@gmail.com",
        "image" => "b1.jpeg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);
