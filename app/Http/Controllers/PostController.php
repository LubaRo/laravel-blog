<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        /** @var array $filters */
        $filters = request()->only('search', 'category');

        return view('posts.index', [
            'posts' => Post::latest()->filter($filters)->get(),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
