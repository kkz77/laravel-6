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

/*
    //Get /videos
    //Get /videos/create
    //Post /videos
    //Get /videos/2
    //Get /videos/edit
    //Put /videos/2
    //Delete /videos/2
 */
Route::get('/',function(){
    return view('index');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/gallary',function(){
    return view('gallary');
});

Route::get('/posts/',[PostController::class,'index']);
Route::post('/posts/',[PostController::class,'store']);
Route::get('/posts/create/',[PostController::class,'create']);
Route::get('/posts/{post:slug}/',[PostController::class,'show']);
Route::get('/posts/{post:slug}/edit/',[PostController::class,'edit']);
Route::put('/posts/{post:slug}/',[PostController::class,'update']);


Route::get('/contact',function(){
    return view('contact');
});

Route::get('/blog-single-post',function(){
    return view('blog-single-post');
});

Route::get('/gallary-single-post',function(){
    return view('gallary-single-post');
});
/* Route::get('/contact',function(){
    return view('contact');
});

Route::get('/posts/{slug}',[PostController::class,'show'])->name('posts'); */
