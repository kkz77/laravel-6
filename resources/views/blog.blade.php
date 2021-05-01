@extends('layouts.app')
@section('content')
<div id="body">
    <h1><span>blog</span></h1>
    <div>
        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="posts/{{ $post->slug }}" class="figure">
                        <img src="{{ $post->imageUrl }}" alt="">
                    </a>
                    <div>
                        <h3>{{ $post->title }}</h3>
                        <p>
                            {{ $post->excerpt }}
                        </p>
                        <a href="posts/{{ $post->slug }}" class="more">read this</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
