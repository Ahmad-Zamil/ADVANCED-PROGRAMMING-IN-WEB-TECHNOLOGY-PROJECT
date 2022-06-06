<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    public function productCreate(){
        return view('pages.product.productCreate');
    }
    public function productCreateSubmitted(Request $request){
        $validate = $request->validate([
            'id'=>'required',
            'name'=>'required|min:5|max:30',
            'dos'=>'required',
            'price'=>'required',
            'quantity'=>'required'
        ],
        [
            'name.required'=>'Please put your name',
            'name.min'=>'Name must be greater than 5 charcters',
            'address.required'=>'Please put your address'
        ]
    );
        $product = new product();
        $product->name = $request->name;
        $product->dos = $request->dos;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();
        return redirect()->route('productList');
    }
    public function productList(){
        $products = product::all();

        return view('pages.product.list')->with('products', $products);
        
    }
    public function productEdit(Request $request){

        $product = product::where('id', $request->id)->first();

        // return $product;
        return view('pages.product.productEdit')->with('product', $product);

    }
    public function productEditSubmitted(Request $request){

        $product = product::where('id', $request->id)->first();

        // return $request->id;
        
        $product->name = $request->name;
        $product->dos = $request->dos;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();

        return redirect()->route('productList');
    }
    public function productDelete(Request $request){
        $product = product::where('id', $request->id)->first();
        $product->delete();
        
        return redirect()->route('productList');
    }

}
