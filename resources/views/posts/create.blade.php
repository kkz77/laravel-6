@extends('layouts.app')
@section('head')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="container mb-5">
        <form method="POST" action="/posts">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input
                    type="text"
                    class="form-control
                    @error('title')
                        border-none ring-4 ring-red-400 ring-opacity-50 ring-offset-0
                    @enderror
                    "
                    name="title"
                    id="title"
                    placeholder="Enter title"
                    value = "{{ old('title') }}"
                    >
                   @error('title')
                    <p class="text-red-400 text-sm mt-1">{{ $errors->first('title') }}</p>
                   @enderror
            </div>
            <div class="form-group">
                <label for="excerpt">Excerpt</label>
                <textarea
                    class="form-control
                    @error('excerpt')
                        border-none ring-4 ring-red-400 ring-opacity-50 ring-offset-0
                    @enderror
                    "
                    name="excerpt"
                    placeholder="Enter excerpt"
                    value = " {{ old('excerpt') }}"
                    ></textarea>
                    <p class="text-red-400 text-sm mt-1">{{ $errors->first('excerpt') }}</p>
            </div>
            <div class="form-group">
                 <label for="body">Body</label>
                 <textarea
                    class="form-control
                    @error('body')
                        border-none ring-4 ring-red-400 ring-opacity-50 ring-offset-0
                    @enderror
                    "
                    name="body"
                    placeholder="What's on your mind?"
                    value="{{ old('body') }}"
                    ></textarea>
                    <p class="text-red-400 text-sm mt-1">{{ $errors->first('body') }}</p>
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
        </form>
    </div>
@endsection
