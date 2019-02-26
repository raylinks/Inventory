<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable =['product','category_id','description'];
    protected $table = 'products';

    /*public function stocks()
    {
        return $this->hasMany(\App\Stock::class);
    }*/

    public function category()
    {
        return $this->belongsTo(\App\Category::class);
    }

   /* public function categoryproduct()
    {
        return $this->belongsTo(\App\CategoryProduct::class, 'product_id','id');
    }*/
}
