<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BrandService extends Model
{
    protected $fillable = [
        'brand_id',
        'parent_id',
        'title',
        'slug',
        'is_published',
        'sort_order',
        'meta_title',
        'meta_description',
        'content',
    ];

    protected $casts = [
        'content' => 'array',
        'is_published' => 'boolean',
    ];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(BrandService::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(BrandService::class, 'parent_id')
            ->orderBy('sort_order')
            ->orderBy('id');
    }

    public function childrenRecursive(): HasMany
    {
        return $this->children()->with('childrenRecursive');
    }

    /**
     * Self and all nested child ids (for cycle checks & parent dropdown).
     */
    public function descendantIds(): array
    {
        $ids = [];
        $queue = [$this->id];
        while ($queue !== []) {
            $id = array_shift($queue);
            $ids[] = $id;
            foreach (static::query()->where('parent_id', $id)->pluck('id')->all() as $cid) {
                $queue[] = $cid;
            }
        }

        return $ids;
    }

    public function depth(): int
    {
        $d = 0;
        $p = $this->relationLoaded('parent') ? $this->parent : $this->parent()->first();
        while ($p) {
            $d++;
            $p = $p->parent()->first();
        }

        return $d;
    }

    public function breadcrumbTitles(): array
    {
        $titles = [];
        $p = $this;
        $guard = 0;
        while ($p && $guard++ < 50) {
            array_unshift($titles, $p->title);
            $p = $p->parent_id ? static::query()->find($p->parent_id) : null;
        }

        return $titles;
    }

    /**
     * @return array<int, array{title: string, slug: string}>
     */
    public function breadcrumbTrail(): array
    {
        $trail = [];
        $p = $this;
        $guard = 0;
        while ($p && $guard++ < 50) {
            array_unshift($trail, ['title' => $p->title, 'slug' => $p->slug]);
            $p = $p->parent_id ? static::query()->find($p->parent_id) : null;
        }

        return $trail;
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function resolveRouteBinding($value, $field = null)
    {
        $brand = request()->route('brand');
        if (! $brand instanceof Brand) {
            abort(404);
        }

        $field = $field ?: $this->getRouteKeyName();

        return static::query()
            ->where('brand_id', $brand->id)
            ->where($field, $value)
            ->firstOrFail();
    }
}
