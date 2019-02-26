<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable= ['category','description'];
    protected $table = 'categories';

    public function stocks()
    {
        return $this->hasMany(\App\Stock::class);
    }

    public function products()
    {
        return $this->hasMany(\App\Product::class);
    }



    public function stockCategories()
    {
        return $this->hasMany(\App\StockCategory::class, 'category_id', 'id');

    }


}
