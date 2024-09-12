<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSectionsBatchRequest;
use App\Http\Requests\UpdateSectionRequest;
use App\Models\Post;
use App\Models\Section;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class SectionController extends Controller
{
    public function index(int $postId): View
    {
        $post = Post::findOrFail($postId);

        return view('sections.index', ['post' => $post]);
    }

    public function create(int $postId): View
    {
        $post = Post::findOrFail($postId);

        return view('sections.create', ['post' => $post]);
    }

    public function storeBatch(StoreSectionsBatchRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $post      = Post::findOrFail($validated['post_id']);

        foreach ($validated['sections'] as $section) {
            if (empty($section['title'])) {
                continue;
            }
            Section::create(
                [
                    'post_id' => $post->id,
                    'title'   => $section['title'],
                    'content' => $section['content'],
                ]
            );
        }

        return redirect()->route('posts.create_conclusion', ['id' => $post->id]);
    }

    public function edit(int $id): View
    {
        $section = Section::findOrFail($id);

        return view('sections.edit', ['section' => $section]);
    }

    public function update(UpdateSectionRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $section   = Section::findOrFail($validated['id']);
        $section->update($validated);

        return redirect()->route('sections.index', ['postId' => $section->post->id]);
    }
}
