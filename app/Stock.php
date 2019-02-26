<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable =['quantity','size','total','rate','paid','due','date','category_id','product_id', 'user_id'];
    protected $table = 'stocks';


   public function category()
   {
       return $this->belongsTo(\App\Category::class, 'category_id');
   }
    public function product()
    {
        return $this->belongsTo(\App\Product::class, 'product_id');
    }



    public function stockCategories()
    {
        return $this->hasOne(\App\StockCategory::class, 'stock_id', 'id');
    }

}
