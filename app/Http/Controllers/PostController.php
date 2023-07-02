<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = new Post($request->all());
        $post->user_id = auth()->id();
        $post->save();

        return redirect()->route('posts.show', $post);
    }

    public function show(Post $post)
    {
        if (auth()->id() !== $post->user_id) {
            abort(403);
        }

        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        if (auth()->id() !== $post->user_id) {
            abort(403);
        }

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        if (auth()->id() !== $post->user_id) {
            abort(403);
        }

        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post->update($request->all());
        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        if (auth()->id() !== $post->user_id) {
            abort(403);
        }

        $post->delete();
        return redirect()->route('posts.index');
    }
}
