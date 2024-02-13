<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Basket;
use App\Models\History;
use App\Models\SizeId;


class Product extends Model
{

    function brand(){
        return $this->belongsTo(Brand::class);
    }

    function category(){
        return $this->belongsTo(Category::class);
    }

    function basket(){
        return $this->belongsTo(Basket::class);
    }

    function history(){
        return $this->belongsTo(History::class);
    }
    
    function sizeId(){
        return $this->belongsTo(SizeId::class);
    }
    protected $fillable = [
        'title_product',
        'description',
        'gender',
        'photo',
        'brand_id',
        'category_id',
        'quantity',
        'cost',
    ];
}
