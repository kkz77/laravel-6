<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show($slug)
    {
       return view('posts',[
           'post' => Post::where('slug',$slug)->firstOrFail(),
       ]);
    }
}
