@extends('layouts.app')
@section('head')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection
@section('content')
    <div class="container mb-5">
        <form method="POST" action="/posts">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="excerpt">Excerpt</label>
                <textarea class="form-control" name="excerpt" placeholder="Enter excerpt"></textarea>
            </div>
            <div class="form-group">
                 <label for="body">Body</label>
                 <textarea class="form-control" name="body" placeholder="What's on your mind?"> </textarea>
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
        </form>
    </div>
@endsection
