<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $fillable = [
        'title',
        'slug',
        'introduction',
        'developpement',
        'author',
        'conclusion',
        'published_at',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }



}

