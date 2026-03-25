<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'title_de',
        'slug_en',
        'slug_de',
        'content_en',
        'content_de',
        'featured_image',
        'status',
        'user_id',
        'category_id',
        'author',
        'short_description_en',
        'short_description_de',
    ];
    
    // Accessors for backward compatibility
    public function getTitleAttribute()
    {
        return $this->title_en ?? $this->title_de;
    }
    
    public function getContentAttribute()
    {
        return $this->content_en ?? $this->content_de;
    }
    
    public function getShortDescriptionAttribute()
    {
        return $this->short_description_en ?? $this->short_description_de;
    }
    
    public function getSlugAttribute()
    {
        return $this->slug_en ?? $this->slug_de;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
