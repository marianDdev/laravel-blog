<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
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

    public function edit(int $id): View
    {
        $blog = Blog::findOrFail($id);

        return view('blog.edit', ['blog' => $blog]);
    }

    public function update(UpdateBlogRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $blog      = Blog::findOrFail($validated['id']);
        $blog->update($validated);

        return redirect()->route('admin.posts');
    }
}
