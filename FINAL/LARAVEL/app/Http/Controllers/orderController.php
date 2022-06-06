<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;

class orderController extends Controller
{
    public function orderCreate(){
        return view('pages.order.orderCreate');
    }
    public function orderCreateSubmitted(Request $request){
        $validate = $request->validate([
            'id'=>'required',
            'name'=>'required|min:5|max:30',
            'dob'=>'required',
            'address'=>'required',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'salary'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password'=>'required'
        ],
        [
            'name.required'=>'Please put your name',
            'name.min'=>'Name must be greater than 5 charcters'
        ]
    );
        $order = new order();
        $order->name = $request->name;
        $order->dob = $request->dob;
        $order->address = $request->address;
        $order->phone = $request->phone;
        $order->salary = $request->salary;
        $order->password = $request->password;
        $order->save();
        return redirect()->route('orderList');
    }
    public function orderList(){
        $orders = order::all();

        return view('pages.order.list')->with('orders', $orders);
        
    }
    public function orderEdit(Request $request){

        $order = order::where('id', $request->id)->first();

        // return $order;
        return view('pages.order.orderEdit')->with('order', $order);

    }
    public function orderEditSubmitted(Request $request){

        $order = order::where('id', $request->id)->first();

        // return $request->id;
        $order->order_id = $request->order_id;
        $order->name = $request->name;
        $order->address = $request->address;
        $order->save();

        return redirect()->route('orderList');
    }
    public function orderDelete(Request $request){
        $order = order::where('id', $request->id)->first();
        $order->delete();
        
        return redirect()->route('orderList');
    }
}
