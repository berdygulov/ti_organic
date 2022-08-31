<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Product extends Model
{
    use HasFactory;
    use AsSource;
    use Attachable;
    use Filterable;

    protected $fillable = [
        'title',
        'price',
        'old_price',
        'thumbnail_id',
    ];
    protected $allowerFilters = [
        'title',
        'price',
        'old_price',
    ];
    protected $allowerSorts = [
        'title',
        'price',
        'old_price',
    ];

    public function thumbnail (): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Attachment::class, 'id', 'thumbnail_id');
    }

    public function gallery (): \Illuminate\Database\Eloquent\Relations\MorphToMany
    {
        return $this->attachment('gallery');
    }

    public function categories ()
    {
        return $this->belongsToMany(Category::class);
    }
}
