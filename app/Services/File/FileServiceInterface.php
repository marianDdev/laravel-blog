<?php

namespace App\Services\File;

use App\Models\Post;
use Illuminate\Http\Request;

interface FileServiceInterface
{
    public function uploadPostImage(Post $post): void;
}
