<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    function brand(){
        
    }
    protected $fillable = [
        'title_product',
        'description',
        'gender',
        'photo',
        'brand_id',
        'category_id ',
        'quantity',
        'cost',
    ];
}
