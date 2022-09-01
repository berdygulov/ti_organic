<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Category extends Model
{
    use HasFactory;
    use Filterable;
    use AsSource;

    protected $fillable = [
        'title',
        'description',
        'thumbnail_id',
    ];

    public function thumbnail ()
    {
        return $this->hasOne(Attachable::class, 'id', 'thumbnail_id');
    }

    public function products ()
    {
        return $this->hasMany(Product::class);
    }
}
