@extends('layouts.default')

@section('content')

@if($posts->count())
    @foreach($posts as $post)
        <article>
            <h2>{{ $post->title }}</h2>
            <p>{{ str_limit($post->body), 40 }}</p>
            <a href='#'>Read more</a>
        </article>
    @endforeach
@endif

@stop