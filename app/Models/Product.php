<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use HasFactory , SoftDeletes;

    protected $guarded = [];

    public function catrgory(){
        return $this->belongsTo(Category::class)->withDefault();
    }

    public function productImages(){
        return $this->hasMany(ProductImage::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }

    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }

}
