<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        //render a list of a resource
        return view('blog',[
            'posts' => Post::latest()->get(),
        ]);
    }

    public function show(Post $post)
    {
        //Show a single resource
       return view('posts.show',[
            'post' => $post,

       ]);
    }

    public function create()
    {
       //Shows a view to create a new resource
       return view('posts.create');
    }

    public function store()
    {
       //Persist the new resource
        $post = new Post();
        request()->validate([
            'title'=> 'required',
            'excerpt'=> 'required',
            'body'=> 'required',
        ]);
        $post->title = request('title');
        $post->slug = Str::lower(str_replace(' ','_',request('title')));
        $post->excerpt= request('excerpt');
        $post->body= request('body');
        $post->save();
        return redirect('posts');
    }

    public function edit(Post $post)
    {
       //Show a view to edit an existing resource
        return view('posts.edit',compact('post'));
    }

    public function update(Post $post)
    {
       //Persist the edited resoucre
        request()->validate([
            'title'=> 'required',
            'excerpt'=> 'required',
            'body'=> 'required',
        ]);
        $post->title = request('title');
        $post->slug = Str::lower(str_replace(' ','_',request('title')));
        $post->excerpt= request('excerpt');
        $post->body= request('body');
        $post->save();
        return redirect('posts');
    }

    public function destroy()
    {
       //Delete the resource
    }
}
