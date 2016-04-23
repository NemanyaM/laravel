<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $post = new Post;

        return view('posts.index', compact('posts', 'post'));
    }

    public function create(Request $request)
    {
        $data = $request->only('title', 'body');

        Post::create($data);

        return redirect('/');
    }

    public function edit($postId)
    {
        $post = Post::where('id', $postId)->first();

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $postId)
    {
        $post = Post::where('id', $postId)->first();

        $data = $request->only('title', 'body');

        $post->update($data);

        return redirect('/');
    }

    public function delete($postId)
    {
        $post = Post::where('id', $postId)->first();

        $post->delete();

        return redirect('/');
    }
}
