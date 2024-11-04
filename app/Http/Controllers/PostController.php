<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostConclusionRequest;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Blog;
use App\Models\Post;
use App\Services\File\FileServiceInterface;
use App\Services\Seo\SeoServiceInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(SeoServiceInterface $seoService): View
    {
        $posts = Post::paginate(10)->sortByDesc('created_at');
        $blog  = Blog::first();
        $meta  = $seoService->getIndexMetaTags();
        $data  = array_merge($meta, ['posts' => $posts, 'blog' => $blog, 'meta' => $meta]);

        return view('posts.index', $data);
    }

    public function adminIndex(): View
    {
        $posts = Post::paginate(10)->sortByDesc('created_at');
        $blog  = Blog::first();

        return view('admin.posts.index', ['posts' => $posts, 'blog' => $blog]);
    }

    public function show(SeoServiceInterface $seoService, string $slug): View
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $meta = $seoService->getShowMetaTags($post);
        $data = array_merge($meta, ['post' => $post]);

        return view('posts.show', $data);
    }

    public function adminShow(string $slug): View
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('admin.posts.show', ['post' => $post]);
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request, FileServiceInterface $fileService): RedirectResponse
    {
        $validated         = $request->validated();
        $slug              = Str::slug($validated['title']);
        $validated['slug'] = $slug;
        $post              = Post::create($validated);

        if ($request->hasFile('post_image') && $request->file('post_image')->isValid()) {
            $fileService->uploadPostImage($post);
        }

        return redirect()->route('sections.create', ['postId' => $post->id]);
    }

    public function edit(int $id): View
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', ['post' => $post]);
    }

    public function creteConclusion(int $id): View
    {
        $post = Post::findOrFail($id);

        return view('posts.create_conclusion', ['post' => $post]);
    }

    public function update(
        UpdatePostRequest    $request,
        FileServiceInterface $fileService
    ): RedirectResponse
    {
        $validated = $request->validated();
        $post      = Post::findOrFail($validated['id']);
        $post->update($validated);

        if ($request->hasFile('post_image') && $request->file('post_image')->isValid()) {
            $fileService->uploadPostImage($post);
        }

        return redirect()->route('admin.posts');
    }

    public function storeConclusion(StorePostConclusionRequest $request): RedirectResponse
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
