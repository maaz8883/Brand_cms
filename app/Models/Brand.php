<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function services()
    {
        return $this->hasMany(BrandService::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class)->latest();
    }
}
