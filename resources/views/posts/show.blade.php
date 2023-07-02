@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">{{ $post->title }}</h1>
            <p class="text-center">{{ $post->body }}</p>
            <p class="text-center">Posted on: {{ $post->created_at->format('m/d/Y') }}</p>
            <p class="text-center">Last updated: {{ $post->updated_at->format('m/d/Y') }}</p>
            <div class="d-flex justify-content-center">
                <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning" style="margin-right: 20px;">Edit</a>
                <form action="{{ route('posts.destroy', $post) }}" method="post" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="margin-right: 20px;">Delete</button>
                </form>
                <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to All Posts</a>
            </div>
        </div>
    </div>
</div>
@endsection