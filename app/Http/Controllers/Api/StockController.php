<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Stock;
use App\User;
use App\Sell;
use App\CategoryProduct;
use App\StockCategory;
use App\Mail\Success;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;


class StockController extends Controller
{
    public function getStocking()
    {
        $products = Product::all();
            $categories= Category::with('products')->get();

        return response()->json([
            'products' => $products,
            'categories' => $categories,
        ]);
    }


    public function stockHistory(){
        //$stocks = Stock::orderBy('created_at', 'desc')->simplePaginate('5');
        $stocks = Stock::with('category','product')
            ->orderBy('created_at', 'desc')
            ->simplePaginate(5);;

        return response()->json($stocks);

    }

    public function getAll()
    {

        $sellall =Sell::with('category','product')
            ->orderBy('created_at', 'desc')
            ->simplePaginate(5);



        return response()->json($sellall);
    }
    public function getAllTrans()
    {
        $allsell=Sell::all();
        return response()->json($allsell);
    }
    public function getAllStocking()
    {
        $allstock=Stock::all();
        return response()->json($allstock);
    }





    public function getUsers()
    {
        $users=User::all();
        return response()->json($users);
    }

    public function postStock(Request $request)
    {

        $this->validate($request,[
            'quantity'=> 'required',
            'size'=> 'required',
            'rate'=> 'required',
            'total'=> 'required',
           // 'paid'=> 'required|string|max:255',
           // 'due' => 'required|string|max:255',
            'date'=> 'required|string',
        ]);
        $user = Auth::user();

        $stocks= Stock::create([
            'quantity'=>$request->quantity,
            'size'=>$request->size,
            'rate'=>$request->rate,
            'total'=>$request->total,
           // 'paid'=>$request->paid,
           /* 'due'=>$request->due,*/
            'date'=>$request->date,
            'category_id'=>$request->category_id,
            'product_id'=>$request->product_id,
            'user_id' =>$user->id
        ]);
        StockCategory::create([
           'stock_id' => $stocks->id,
           'category_id' => $request->category_id,
        ]);
        /*$stockcategory=StockCategory::create([
            'category_id'=>$stocks->category_id,
            'stock_id'=>$stocks->id
        ]);*/
        //Log::info($categorystock);
        return response()->json($stocks);
    }

    public function getSize()
    {
        $product =  Stock::all(['id', 'product_id', 'rate', 'size']);
        return response()->json($product);
    }

    public function postReg(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required',
            'username'=> 'required',
            'email'=> 'required',
            'password'=>'required',

        ]);
        $users=User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        \Mail::to($users)->send(new Success($users));
        return response()->json($users);
    }
    public function postProduct(Request $request)
    {
        $this->validate($request,[
            'product'=> 'required',
            'description'=> 'required'
        ]);
        $products=Product::create([
            'product'=>$request->product,
            'description'=>$request->description,
            'category_id'=>$request->category_id


        ]);

        /*Log::info($categoryproduct);*/
        return response()->json($products);

    }

    public function postCategory(Request $request)
    {
        $this->validate($request,[
            'category'=> 'required',
            'description'=> 'required'
        ]);
        $cat=Category::create([
            'category'=>$request->category,
            'description'=>$request->description

        ]);

        return response()->json($cat, 200);

    }
    public function postStockSold(Request $request)
    {

        $this->validate($request,[
            'buyer'=> 'required',
            'quantity'=> 'required',
            'size'=> 'required',
            'rate'=> 'required',
            'total'=> 'required',
            'paid'=> 'required|string|max:255',
             /*'due' => 'required|string|max:255',*/
            'date'=> 'required|string',
        ]);

        $sells= Sell::create([
            'buyer'=>$request->buyer,
            'quantity'=>$request->quantity,
            'size'=>$request->size,
            'rate'=>$request->rate,
            'total'=>$request->total,
             'paid'=>$request->paid,
             'due'=>$request->due,
            'payment'=>$request->payment,
            'date'=>$request->date,
            'category_id'=>$request->category_id,
            'product_id'=>$request->product_id
        ]) ;
        return response()->json($sells);
    }

    /*public function getAllStock()
    {
        $stocks= Stock::all();
        return response()->json($stocks);
    }*/

    public function logout(Request $request)
    {
        Auth::logout();
    }

    public function stockEdit($id)
    {
        $stocking= Stock::where('id', $id)->get();
        return response()->json($stocking);
    }

    public function transEdit($id)
    {

        return view('edits.transEdit');
    }


    public function getEditing()
    {
        $trans= Sell::all();
        return response()->json($trans);
    }







    public function getTrans()
    {
        $trans= Sell::all();
        return response()->json($trans);
    }
}
