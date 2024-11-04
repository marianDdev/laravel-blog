<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * @property string $title
 * @property string $slug
 * @property string $image_url
 * @property string $summary
 */
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
        'image_url',
    ];

    public function sections(): HasMany
    {
        return $this->hasMany(Section::class);
    }
}
