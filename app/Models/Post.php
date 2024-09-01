<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'slug',
        'title',
        'summary',
        'first_paragraph',
        'second_paragraph',
        'third_paragraph',
        'conclusion',
    ];

    public function sections(): HasMany
    {
        return $this->hasMany(Section::class);
    }
}
