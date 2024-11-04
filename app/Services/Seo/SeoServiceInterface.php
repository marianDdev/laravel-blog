<?php

namespace App\Services\Seo;

use App\Models\Post;

interface SeoServiceInterface
{
    public function getIndexMetaTags(?string $title = null): array;

    public function getShowMetaTags(Post $post): array;

    public function getShowTitle(Post $post): string;

    public function getShowDescription(Post $post): string;

    public function getShowKeywords(Post $post): string;
}
