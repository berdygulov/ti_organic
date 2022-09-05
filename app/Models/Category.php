<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Category extends Model
{
    use HasFactory;
    use Filterable;
    use AsSource;
    use Attachable;

    protected $fillable = [
        'title',
        'excerpt',
        'description',
        'thumbnail_id',
    ];

    public function thumbnail (): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Attachment::class, 'id', 'thumbnail_id');
    }

    public function products (): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Product::class);
    }
}
