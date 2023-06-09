<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class OrderItem extends Model
{
    use HasFactory , SoftDeletes;

    protected $guarded = [];

    public function product(){
        return $this->belongsTo(Product::class)->withDefault();
    }

    public function order(){
        return $this->belongsTo(Order::class)->withDefault();
    }

    public function user(){
        return $this->belongsTo(User::class)->withDefault();
    }

}
