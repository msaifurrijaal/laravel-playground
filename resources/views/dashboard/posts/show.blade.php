@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success">Back to my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>

                <p class="mt-3">
                    In
                    <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
                        {{ $post->category->name }}
                    </a>
                </p>

                <img src="https://picsum.photos/1200/400" class="img-fluid" alt="{{ $post->category->name }}">

                <article class="my-3">
                    {!! $post->body !!}
                </article>

                <a href="/dashboard/posts">Back to my posts</a>

            </div>
        </div>
    </div>
@endsection
