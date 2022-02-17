<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{

    protected $guarded = [];

    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function carts()
    {
        return $this->belongsToMany(User::class , 'carts'  , 'variation_id' , 'user_id')->withPivot(['qty' , 'total']);;
    }

}
