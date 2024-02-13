<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Size;

class SizeId extends Model
{
    function sizes(){
        return $this->hasMany(Size::class);
    }
    function product(){
        return $this->hasMany(Product::class);
    }
   protected $fillable = [
    'size_id',
    'product_id',
   ];
}
