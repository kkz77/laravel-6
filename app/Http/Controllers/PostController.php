<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($post)
    {
       $posts = [
           'my-first-post' => 'This is my first post',
           'my-second-post'=> 'This is my second post',
       ];

       if(!array_key_exists($post,$posts)){
           abort(404);
       }

       return view('posts',[
           'post' => $posts[$post],
       ]);
    }
}
