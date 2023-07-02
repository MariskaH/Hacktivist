@extends('layouts.app')

@section('content')
<h1>All Posts</h1>
<a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
<hr>
@foreach ($posts as $post)
<div class="card mt-4">
    <div class="card-header">{{ $post->title }}</div>
    <div class="card-body">{{ $post->body }}</div>
    <div class="card-footer">
        <a href="{{ route('posts.show', $post) }}" class="btn btn-info">View</a>
        <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>
        <!-- Add your delete form here -->
    </div>
</div>
@endforeach
@endsection