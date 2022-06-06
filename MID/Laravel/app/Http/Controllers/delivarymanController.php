<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\delivaryman;

class delivarymanController extends Controller
{
    public function delivarymanCreate(){
        return view('pages.delivaryman.delivarymanCreate');
    }
    public function delivarymanCreateSubmitted(Request $request){
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
            'name.min'=>'Name must be greater than 5 charcters',
            'address.required'=>'Please put your address'
        ]
    );
        $delivaryman = new delivaryman();
        $delivaryman->name = $request->name;
        $delivaryman->dob = $request->dob;
        $delivaryman->address = $request->address;
        $delivaryman->phone = $request->phone;
        $delivaryman->salary = $request->salary;
        $delivaryman->password = $request->password;
        $delivaryman->save();
        return redirect()->route('delivarymanList');
    }
    public function delivarymanList(){
        $delivarymans = delivaryman::all();

        return view('pages.delivaryman.list')->with('delivarymans', $delivarymans);
        
    }
    public function delivarymanEdit(Request $request){

        $delivaryman = delivaryman::where('id', $request->id)->first();

        // return $delivaryman;
        return view('pages.delivaryman.delivarymanEdit')->with('delivaryman', $delivaryman);

    }
    public function delivarymanEditSubmitted(Request $request){

        $delivaryman = delivaryman::where('id', $request->id)->first();

        // return $request->id;
        
        $delivaryman->name = $request->name;
        $delivaryman->dob = $request->dob;
        $delivaryman->address = $request->address;
        $delivaryman->phone = $request->phone;
        $delivaryman->salary = $request->salary;
        $delivaryman->address = $request->address;
        $delivaryman->password = $request->password;
        $delivaryman->save();

        return redirect()->route('delivarymanList');
    }
    public function delivarymanDelete(Request $request){
        $delivaryman = delivaryman::where('id', $request->id)->first();
        $delivaryman->delete();
        
        return redirect()->route('delivarymanList');
    }
    public function delivarymanlogin(){
        return view('pages.login.delivarymanlogin');
    }

}
