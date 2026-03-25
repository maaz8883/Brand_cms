<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_en',
        'name_de',
        'slug',
        'description_en',
        'description_de',
    ];
    
    // Accessors for backward compatibility
    public function getNameAttribute()
    {
        return $this->name_en ?? $this->name_de;
    }
    
    public function getDescriptionAttribute()
    {
        return $this->description_en ?? $this->description_de;
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
