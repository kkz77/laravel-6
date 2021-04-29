<?php

use App\Http\Controllers\PostController;
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

/* Route::get('/{post}', function ($post) {
    $posts =[
        'my-first-post'=> 'This is my first post',
        'my-second-post'=> 'This is my second post'
    ];

    if(!array_key_exists($post,$posts))
    {

        abort(404,'Sorry the post not found');
    }

    return view('test',[
        'post'=> $posts[$post],
    ]);
}); */

Route::get('/posts/{post}',[PostController::class,'show'])->name('posts');
