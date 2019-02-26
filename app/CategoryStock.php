<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryStock extends Model
{
    protected $table = 'category_stocks';
    public $fillable =['id','category_id','stock_id'];

    /*public function stock()
    {
        return $this->belongsTo('\App\Stock::class','stock_id','id');
    }

    public function category()
    {
        return $this->belongsTo('\App\Category::class','category_id', 'id');
    }*/

}
