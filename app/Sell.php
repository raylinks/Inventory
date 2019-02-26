<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    protected $fillable =[
       'id', 'category_id','product_id','buyer', 'quantity','size','result', 'rate','total','paid','due','date','payment'
    ];


    public function category()
    {
        return $this->belongsTo(\App\Category::class, 'category_id');
    }
    public function product()
    {
        return $this->belongsTo(\App\Product::class, 'product_id');
    }

    public function routeNotificationForNexmo()
    {
        return $this->phone;
    }
}
