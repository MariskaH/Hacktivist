@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">Edit Post</h1>
            <form action="{{ route('posts.update', $post) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $post->title) }}" required>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body" rows="3" required>{{ old('body', $post->body) }}</textarea>
                    @error('body')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-primary">Update Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection