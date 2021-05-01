@extends('layouts.app')
@section('content')
    <div id="body">
        <h1><span>blog single post</span></h1>
        <div>
            <img src="/{{ $post->imageUrl }}" alt="{{ $post->title }}">
            <div class="article">
                <h2>{{ $post->title }}</h2>
                <p>
                    {{ $post->body }}
                </p>
            </div>
        </div>
    </div>
@endsection
