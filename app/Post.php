<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'details',
        'author_id',
        'category_id',
        'status',
        'file',
        'total_view',
        'is_featured',
        'published_at',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
