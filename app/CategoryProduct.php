<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    protected $table = 'category_products';
    public $fillable =['id','product_id','category_id'];

    public function category()
    {
        return $this->belongsTo(\App\Category::class, 'category_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(\App\Product::class, 'product_id', 'id');
    }
}
