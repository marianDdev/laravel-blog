<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\Section;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class SectionController extends Controller
{
    public function create(int $postId): View
    {
        $post = Post::findOrFail($postId);

        return view('posts.create', ['post' => $post]);
    }

    public function storeBatch(StorePostRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $post      = Post::findOrFail($validated['postId']);
        foreach ($validated['sections'] as $section) {
            Section::create(
                [
                    'post_id' => $post->id,
                    'title'   => $validated['title'],
                    'content' => $validated['content'],
                ]

            );
        }

        return redirect()->route('posts.show', ['slug' => $post->slug]);
    }
}
