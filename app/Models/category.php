<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mockery\Matcher\Type;

class category extends Model
{
    use HasFactory , SoftDeletes;
    protected $guarded = [] ;

    public function children(Type $var = null) {
        return $this->hasMany(Category::class , 'parent_id');
    }

    public function parent(Type $var = null) {
        return $this->belongTo(Category::class , 'parent_id')->withDefault();
    }

    public function products(Type $var = null) {
        return $this->hasMany(Product::class);
    }

}
