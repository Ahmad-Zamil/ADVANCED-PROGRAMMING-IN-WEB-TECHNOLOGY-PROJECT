<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sellsman;

class sells_manController extends Controller
{
    public function sells_manCreate(){
        return view('pages.sells_man.sells_manCreate');
    }
    public function sells_manCreateSubmitted(Request $request){
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
        $sellsman = new sellsman();
        $sellsman->name = $request->name;
        $sellsman->dob = $request->dob;
        $sellsman->address = $request->address;
        $sellsman->phone = $request->phone;
        $sellsman->salary = $request->salary;
        $sellsman->password = $request->password;
        $sellsman->save();
        return redirect()->route('sells_manList');
    }
    public function sells_manList(){
        $sells_mans = sellsman::all();

        return view('pages.sells_man.list')->with('sells_mans', $sells_mans);
        
    }
    public function sells_manEdit(Request $request){

        $sells_man = sellsman::where('id', $request->id)->first();

        // return $sells_man;
        return view('pages.sells_man.sells_manEdit')->with('sells_man', $sells_man);

    }
    public function sells_manEditSubmitted(Request $request){

        $sells_man = sellsman::where('id', $request->id)->first();

        // return $request->id;
        $sells_man->name = $request->name;
        $sells_man->dob = $request->dob;
        $sells_man->address = $request->address;
        $sells_man->phone = $request->phone;
        $sells_man->salary = $request->salary;
        $sells_man->password = $request->password;
        $sells_man->save();
        return redirect()->route('sells_manList');
    }
    public function sells_manDelete(Request $request){
        $sells_man = sellsman::where('id', $request->id)->first();
        $sells_man->delete();
        
        return redirect()->route('sells_manList');
    }
    //sells man log in
    public function sells_man(Request $request){

        $t = sellsman::where('id',$request->id)->first();
        // return $t->id;
        //hasmany
        // return $t->courses;

        //eloquent
        return $t->sells_man();
    }
    public function signout()
    {
        //return 'dip';
        session()->flush();
        return redirect('home');
    }
}
