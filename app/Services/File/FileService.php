<?php

namespace App\Services\File;

use App\Models\Post;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class FileService implements FileServiceInterface
{
    /**
     * @throws FileIsTooBig
     * @throws FileDoesNotExist
     */
    public function uploadPostImage(Post $post): void
    {
        $image           = $post->addMediaFromRequest('post_image')->toMediaCollection('post_image');
        $post->image_url = $image->getUrl();
        $post->save();
    }
}
