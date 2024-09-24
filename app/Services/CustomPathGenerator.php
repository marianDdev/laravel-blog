<?php

namespace App\Services;

use App\Models\Blog;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;

class CustomPathGenerator implements PathGenerator
{
    public function getPath(Media $media): string
    {
        $model = $media->model;

        if ($model instanceof Blog && Auth::user()->isAdmin()) {
            return sprintf('blogs/%s/%s', strtolower(Str::slug($model->title)));
        }

        if ($model instanceof User) {
            return sprintf('%s/readers/%s/avatar', env('APP_NAME'), strtolower(Str::slug($model->getFullName)));
        }

        if ($model instanceof Post) {
            return sprintf('%s/posts/%s/%s', env('APP_NAME'), $model->slug, $media->collection_name);
        }

        return '';
    }

    public function getPathForConversions(Media $media): string
    {
        return $this->getPath($media) . 'conversions/';
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getPath($media) . 'responsive-images/';
    }
}
