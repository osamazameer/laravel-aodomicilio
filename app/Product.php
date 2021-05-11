<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image_url',
        'is_active',
        'category_id',
        'price'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
