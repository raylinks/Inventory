<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockCategory extends Model
{
    protected $table = 'stock_categories';
    public $fillable =['id','stock_id','category_id'];

    public function category()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }

    public function stock()
    {
        return $this->belongsTo('App\Stock','stock_id', 'id');
    }
}
