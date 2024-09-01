<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::paginate(10);

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(string $slug): View
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('posts.show', ['post' => $post]);
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request): RedirectResponse
    {
        $validated         = $request->validated();
        $slug              = Str::slug($validated['title']);
        $validated['slug'] = $slug;
        $post              = Post::create($validated);

        return redirect()->route('posts.show', ['slug' => $post->slug]);
    }

    public function edit(int $id): View
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', ['post' => $post]);
    }

    public function update(UpdatePostRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $post      = Post::findOrFail($validated['id']);
        $post->update($validated);

        return redirect()->route('posts.show', ['slug' => $post->slug]);
    }

    public function delete(int $id): RedirectResponse
    {
        $post = Post::findOrFail($id);
        $post->sections()->delete();
        $post->delete();

        return redirect()->route('posts.index');
    }
}
