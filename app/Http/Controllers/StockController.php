<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sell;
use App\Stock;
use App\User;
use App\Category;

class StockController extends Controller
{
    public function getStock()
    {
       return view('stock.stock');

    }

    public function getCategory()
    {
        return view('stock.category');
    }

    public function getProduct()
    {
        return view('stock.product');
    }

    public function getAvailable()
    {
        return view('stock.available');
    }
    public function getCustomer()
    {
        return view('stock.customer');
    }

    public function getStockHistory()
    {
        return view('stock.stockHistory');
    }

    public function getStockSold()
    {
        return view('stock.stockSold');
    }

    public function getDue()
    {
        return view('stock.payDue');
    }

    public function destroy($id)
    {
        $sell =Sell::where('id', $id)->first();
        Sell::where('id', $sell->id)->delete();

        session()->flash('alert-success', 'sells delected successfully');
        return redirect()->back();
    }

    public function getDestroy($id)
    {
        $stocks =Stock::where('id', $id)->first();
        Stock::where('id', $stocks->id)->delete();

        session()->flash('alert-success', 'stocks delected successfully');
        return redirect()->back();
    }

   /* public function stockEdit($id){
        $stockss = Stock::where('id', $id)->get();

        return view('edits.stockEdit',compact('stockss'));
    }*/

    public function stockEdit(){


        return view('edits.stockEdit');
    }

    public function transEdit()
    {
        return view('edits.transEdit');
    }





    /*public function getaCategory()
    {
        return Category::orderBy('category', 'ASC')->get(['id', 'category']);
    }

    public function getaProduct(Category $category)
    {
        return $category->Products()->orderBy('product', 'ASC')->get(['id', 'product']);
    }*/



}
