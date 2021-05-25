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

        return view('posts', [
            'posts' => Post::latest()->filter($filters)->get(),
            'categories' => Category::all(),
            'currentCategory' => isset($filters['category']) ? Category::firstWhere('slug', $filters['category']) : null,
            'hasFilters' => sizeof($filters) > 0
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'post' => $post
        ]);
    }
}
