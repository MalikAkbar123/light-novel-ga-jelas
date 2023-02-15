<?php

namespace App\Models;

use App\Models\Category;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'book_code', 'title', 'slug', 'cover', 'status'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

        public function categories(): BelongsToMany
        {            
        return $this->belongsToMany(Category::class, 'book_category', 'book_id', 'category_id');
}
}
