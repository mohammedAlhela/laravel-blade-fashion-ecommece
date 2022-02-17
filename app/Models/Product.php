<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class)->with('subCategories');
    }


    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class)->with('category');
    }

    public function variations()
    {
        return $this->hasMany(Variation::class , 'product_id'  , 'id')->with(['color' , 'size']);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tag', 'product_id', 'tag_id');

    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'variations', 'product_id', 'color_id');

    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'variations', 'product_id', 'size_id');

    }

    public function whishlists()
    {
        return $this->belongsToMany(User::class , 'whishlists'  , 'product_id' , 'user_id');
    }



}
