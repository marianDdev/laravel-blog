<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Models\Blog;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class BlogController extends Controller
{
    public function create(): View
    {
        return view('blog.create');
    }

    public function store(StoreBlogRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        Blog::create($validated);

        return redirect()->route('posts.index');
    }
}
