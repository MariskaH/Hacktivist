@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">All Posts</h1>
            <div class="d-flex justify-content-center mb-3">
                <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
            </div>
            <hr>
            @forelse ($posts as $post)
            <div class="card mt-4">
                <div class="card-header text-center">{{ $post->title }}</div>
                <div class="card-body">{{ $post->body }}</div>
                <div class="card-footer d-flex justify-content-around">
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-info">View</a>
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
            @empty
            <p class="text-center">No posts to display.</p>
            @endforelse
            <!-- Pagination Links -->
            <div class="d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>
@endsection