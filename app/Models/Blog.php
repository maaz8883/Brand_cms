<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'meta_title',
        'meta_description',
        'slug',
        'keywords',
        'content',
        'brand',
        'image',
        'title_en',
        'slug_en',
        'content_en',
        'json_ld',
        'featured_image',
        'status',
        'user_id',
        'brand_id',
        'author',
        'short_description_en',
    ];

    public function getTitleAttribute(): ?string
    {
        return $this->attributes['title'] ?? ($this->attributes['title_en'] ?? null);
    }

    public function getContentAttribute(): ?string
    {
        return $this->attributes['content'] ?? ($this->attributes['content_en'] ?? null);
    }

    public function getShortDescriptionAttribute(): ?string
    {
        return $this->attributes['short_description_en'] ?? null;
    }

    public function getSlugAttribute(): ?string
    {
        return $this->attributes['slug'] ?? ($this->attributes['slug_en'] ?? null);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
