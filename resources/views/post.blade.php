@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1>{{ $post->title }}</h1>

                <p>
                    By.
                    <a href="/posts?author={{ $post->author->usernme }}" class="text-decoration-none">
                        {{ $post->author->name }}
                    </a>
                    in
                    <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
                        {{ $post->category->name }}
                    </a>
                </p>

                <img src="https://picsum.photos/1200/400" class="img-fluid" alt="{{ $post->category->name }}">

                <article class="my-3">
                    {!! $post->body !!}
                </article>

                <a href="/posts">Back to blog</a>

            </div>
        </div>
    </div>
@endSection
